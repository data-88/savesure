<?php

namespace App\Http\Controllers\Backend;

use App\Brand;
use App\Company;
use App\Detail;
use App\Http\Controllers\Controller;
use App\Type;
use App\Variant;
use Illuminate\Http\Request;

class BackendController extends Controller
{
    protected $pages = 'Backend.pages.';
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $brandsCount = Brand::count();
        $modelCount = Type::count();
        $variantCount = Variant::count();
        $companiesCount = Company::count();
        $detailsCount = Detail::count();
        return view($this->pages . 'index',compact('brandsCount','modelCount','variantCount','companiesCount','detailsCount'));
    }
    /*public function index()
    {
        return view( '/auth/login');
    }*/
}
