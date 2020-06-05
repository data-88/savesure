<?php

namespace App\Http\Controllers\Backend;

use App\Brand;
use App\Category;
use App\Http\Controllers\Controller;
use App\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CarModelController extends Controller
{
    protected $pages = 'Backend.pages.car.model.';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Joining brand table, type table, variant table with detail table.
        $data = DB::table('types')
            ->leftJoin('category','category.id','types.category_id')
            ->join('brands', 'brands.id', 'types.brand_id')
            ->select(
                'types.id', 'types.name',
                'types.brand_id', 'brands.name as brand_name',
                'types.category_id','category.name as cat_name')
            ->where('types.category_id', '=', 2)
            ->get();

        $brands = Brand::get();
        $category = Category::get();

        return view($this->pages . 'home')
            ->with(['category' => $category])
            ->with(['brands' => $brands])
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
        return view($this->pages . 'add')->with(['brands' => $brands]);
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
            'carBrand' =>'required',
            'name' => 'required | unique:types'
        ]);
        $data = new Type();
        $data->category_id = 2;
        $data->brand_id = request('carBrand');
        $data->name = request('name');

        $data->save();

        return redirect()->route('car-model')->with('status', 'Model Successfully Added');
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
        $model = Type::findorFail($id);
        return view($this->pages . 'update', ['model' => $model]);
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
            'name' => 'required | unique:types',
        ]);
        $model = Type::find($id);
        $model->name = $request->input('name');
        $model->update();

        return redirect()->route('car-model')->with('status', 'Model Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Type::findorFail($id);
        $model->delete();

        return redirect()->route('car-model')->with('status', 'Model Successfully Deleted.');
    }
}
