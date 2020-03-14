<?php

namespace App\Http\Controllers\Backend;

use App\Brand;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BrandsController extends Controller
{
    protected $pages = 'Backend.pages.brand.';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = Brand::where('category_id', 1)->get();
        return view($this->pages. 'home', ['brands'=>$brands]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view($this->pages. 'add');
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
           'name' => 'required | unique:brands'
        ]);

        $data = new Brand();
        $data->name = request('name');
        $data->category_id = 1;
        $data->save();

        return redirect()->route('brands')->with('status','Brand Successfully Added');
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
        $brands = Brand::findorFail($id);
        return view($this->pages. 'update',['brands'=>$brands]);
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
        $brands = Brand::find($id);
        $brands->name = $request->input('name');
        $brands->update();

        return redirect()->route('brands')->with('status','Brand Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $brands = Brand::findorFail($id);
        $brands->delete();

        return redirect()->route('brands')->with('status','Brand Successfully Deleted.');

    }
}
