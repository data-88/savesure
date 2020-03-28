<?php

namespace App\Http\Controllers\Backend;

use App\Brand;
use App\Category;
use App\Type;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VariantController extends Controller
{
    protected $pages = 'Backend.pages.variant.';
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
            ->where('variants.category_id', '=', 1)
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
