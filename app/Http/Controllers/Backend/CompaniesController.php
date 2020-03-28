<?php

namespace App\Http\Controllers\Backend;

use App\Company;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CompaniesController extends Controller
{

    protected $pages = 'Backend.pages.company.';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $company = Company::get();
        return view($this->pages . 'home', ['company' => $company]);
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->get('name') == '' || $request->get('loc') == '' || $request->get('phn') == '') {
            return redirect()->route('add-company')->with('error', 'Please! Some fields are missing...');
        } else {
            $image = $request->file('imgLogo');
            if ($image != '') {
                $rename = md5(rand(111, 999999));
                $newName = $rename . '.' . $image->getClientOriginalExtension();

                $company = new Company([
                    'name' => $request->get('name'),
                    'location' => $request->get('loc'),
                    'phone' => $request->get('phn'),
                    'image' => $newName
                ]);

                if ($company->save()) {
                    $image->move(public_path('img/Companies/'), $newName);
                    return redirect()->route('company')->with('success', 'Company Successfully Added.');
                } else {
                    return redirect()->route('add-company')->with('success', 'Couldn\'t Add new Company.');
                }
            } else {
                return redirect()->route('add-company')->with('error', 'Please! Select Image for Logo');
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $company=Company::findorFail($id);
        return view($this->pages. 'update',['company'=>$company]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $file = $request->file('imgLogo');
        if ($file != '') {
            $rename = md5(rand(111, 999999));
            $newName = $rename . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('img/Companies'), $newName);

            $update = [
                'name' => $request->get('name'),
                'location' => $request->get('loc'),
                'phone' => $request->get('phn'),
                'image' => $newName
            ];

            $image = DB::table('companies')->where('id', $id)->first();
            $imageFile = $image->image;
            $filename = public_path('img/companies/' . $imageFile);
            unlink($filename);

            Company::where('id', $id)->update($update);
            return redirect()->route('company')->with('success', 'Company Updated Successfully.');
        } else {
            $update = [
                'name' => $request->get('name'),
                'location' => $request->get('loc'),
                'phone' => $request->get('phn'),
            ];
            Company::where('id', $id)->update($update);
            return redirect()->route('company')->with('success', 'Company Updated Successfully.');
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $company = Company::findorFail($id);
        $company->delete();

        return redirect()->route('company')->with('status','Comapny Successfully Deleted.');
    }
}
