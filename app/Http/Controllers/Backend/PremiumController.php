<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Premium;
use Illuminate\Http\Request;

class PremiumController extends Controller
{
    protected $pages = 'Backend.pages.premium.';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $premuim = Premium::get();
        return view($this->pages . 'home',['premium'=>$premuim]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view($this->pages . 'add');
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
            'min' => 'required',
            'max' => 'required',
            'amt' => 'required',
        ]);

        $data = new Premium();
        $data->min_cc = request('min');
        $data->max_cc = request('max');
        $data->amount = request('amt');

        $data->save();

        return redirect()->route('premium')->with('status','Premium Successfully Added');
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
        $premium = Premium::findorFail($id);
        return view($this->pages. 'update',['premium'=>$premium]);
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
            'min' => 'required',
            'max' => 'required',
            'amt' => 'required',
        ]);
        $premium = Premium::find($id);

        $premium->min_cc = request('min');
        $premium->max_cc = request('max');
        $premium->amount = request('amt');

        $premium->update();
        return redirect()->route('premium')->with('status','Premium Successfully Updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $premium = Premium::findorFail($id);
        $premium->delete();

        return redirect()->route('premium')->with('status', 'Premium Successfully Deleted.');
    }
}
