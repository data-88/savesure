<?php

namespace App\Http\Controllers\Frontend;

use App\Brand;
use App\Http\Controllers\Controller;
use App\Type;
use App\Variant;
use DB;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    private $pages='Frontend.pages.';

    public function index(){
        return view($this->pages.'index');
    }

    public function twowheeler(){
        $brands = Brand::all()->pluck('name','id');
        return view($this->pages. 'twowheeler',compact('brands'));
    }

    public function getTypes(Request $request){
        $types = Type::where('brand_id',$request->brand_id)->pluck('name','id');
        return response()->json($types);
    }

    public function getVariants(Request $request){
        $variants = Variant::where('type_id',$request->type_id)->pluck('name','id');
        return response()->json($variants);

    }

    public function about(){
        return view($this->pages. 'about');
    }
}
