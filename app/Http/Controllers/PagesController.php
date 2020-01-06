<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;


class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }
    
    public function twowheeler(){
        return view('pages.twowheeler');
    }
    
    public function about(){
        return view('pages.about');
    }
}
