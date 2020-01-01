<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App\Brand;
use App\Model;

class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }
    
    public function twowheeler(){
        $brand = Brand::all();
        return view('pages.twowheeler', compact('brand'));
    }
    
    public function about(){
        return view('pages.about');
    }
}
