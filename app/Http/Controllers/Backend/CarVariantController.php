<?php

namespace App\Http\Controllers\Backend;

use App\Brand;
use App\Category;
use App\Http\Controllers\Controller;
use App\Type;
use App\Variant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CarVariantController extends Controller
{
    protected $pages = 'Backend.pages.car.variant.';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Joining brand table, type table, variant table with detail table.
        $data = DB::table('variants')
            ->Join('category','category.id','variants.category_id')
            ->join('brands', 'brands.id', 'variants.brand_id')
            ->join('types', 'types.id', 'variants.type_id')
            ->select(
                'variants.id', 'variants.name',
                'variants.brand_id', 'brands.name as brand_name',
                'variants.category_id','category.name as cat_name',
                'variants.type_id','types.name as model_name')
            ->where('variants.category_id', '=', 2)
            ->get();

        $category = Category::get();
        $brands = Brand::get();
        $types = Type::get();

        return view($this->pages . 'home')
            ->with(['category' => $category])
            ->with(['brands' => $brands])
            ->with(['types' => $types])
            ->with(['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brands = Brand::where('category_id', 2)->pluck('name', 'id');
        $types = Type::get();
        return view($this->pages . 'add')
            ->with(['brands' => $brands])
            ->with(['types' => $types]);
    }

    public function getModel(Request $request)
    {
        $types = Type::where('brand_id', $request->brand_id)->pluck('name', 'id');
        return response()->json($types);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = request()->validate([
            'carBrand' => 'required',
            'carModel' => 'required',
            'name' => 'required | unique:variants',
            'cc' => 'required | numeric',
        ]);
        $data = new Variant();
        $data->category_id = 2;
        $data->brand_id = request('carBrand');
        $data->type_id = request('carModel');
        $data->name = request('name');
        $data->vehicle_cc = request('cc');

        $data->save();

        return redirect()->route('car-variant')->with('status','Variant Successfully Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = DB::table('variants')
            ->join('brands', 'brands.id', 'variants.brand_id')
            ->join('types', 'types.id', 'variants.type_id')
            ->select(
                'variants.id', 'variants.name',
                'variants.brand_id', 'brands.name as brand_name',
                'variants.type_id','types.name as model_name')
            ->get();
        $variant = Variant::findorFail($id);
        $brands = Brand::where('category_id', 2)->pluck('name', 'id');

        return view($this->pages . 'update', ['variant' => $variant])
            ->with(['brands' => $brands])
            ->with(['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validateData = request()->validate([
            'carBrand' => 'required',
            'carModel' => 'required',
            'name' => 'required | unique:variants',
            'cc' => 'required | numeric',
        ]);

        $variant = Variant::find($id);
        $variant->name = $request->input('name');
        $variant->brand_id = request('carBrand');
        $variant->type_id = request('carModel');
        $variant->vehicle_cc = request('cc');
        $variant->update();

        return redirect()->route('car-variant')->with('status', 'Variant Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $variant = Variant::findorFail($id);
        $variant->delete();

        return redirect()->route('car-variant')->with('status', 'Variant Successfully Deleted.');
    }
}
