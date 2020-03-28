<?php

namespace App\Http\Controllers\Backend;

use App\About;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class aboutController extends Controller
{
    protected $pages = 'Backend.pages.about.';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about = About::get();
        return view($this->pages . 'home', ['abouts' => $about]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $about = About::get();
        if (count($about) <= 0) {
            return view($this->pages . 'add');
        } else {
            return redirect()->route('about')->with(['abouts' => $about]);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->get('txtmain') == '' || $request->get('txtdesc') == '') {
            return redirect()->route('add-about')->with('error', 'Please! Some fields are missing...');
        } else {
            $about = new About([
                'main_text' => $request->get('txtmain'),
                'about_text' => $request->get('txtdesc'),
            ]);

            if ($about->save()) {
                return redirect()->route('about')->with('success', 'About Us Successfully Added...');
            } else {
                return redirect()->route('add-about')->with('success', 'About Us couldn\'t Add...');
            }
        }

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
        $data = About::where('id', '=', $id)->first();
        return view($this->pages . 'update', ['abouts' => $data]);
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
        $update = [
            'main_text' => $request->get('txtmain'),
            'about_text' => $request->get('txtdesc'),
        ];

        About::where('id', $id)->update($update);
        return redirect()->route('about')->with('success', 'About Us Successfully Updated...');
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
