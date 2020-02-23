<?php

namespace App\Http\Controllers\Frontend;

use App\Brand;
use App\Http\Controllers\Controller;
use App\Type;
use App\Variant;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    private $pages='Frontend.pages.';

    public function index(){
        return view($this->pages.'index');
    }

    public function twowheeler(){
        $brands=Brand::get();
        $types=Type::get();
        $variants=Variant::get();
        return view($this->pages. 'twowheeler')->with(['brand'=>$brands])->with(['type'=>$types])->with(['variant'=>$variants]);
    }

    public function about(){
        return view($this->pages. 'about');
    }
}
