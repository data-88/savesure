<?php

namespace App\Http\Controllers\Frontend;

use App\About;
use App\Brand;
use App\Http\Controllers\Controller;
use App\Type;
use App\Variant;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Detail;
use App\Premium;
use App\Company;

class FrontendController extends Controller
{
    private $pages = 'Frontend.pages.';

    public function index()
    {
        return view($this->pages . 'index');
    }

    public function twowheeler()
    {
        $brands = Brand::where('category_id', 1)->pluck('name', 'id');
        return view($this->pages . 'twowheeler', compact('brands'));
    }

    public function car()
    {
        $brands = Brand::where('category_id', 2)->pluck('name', 'id');
        return view($this->pages . 'car', compact('brands'));
    }

    public function getTypes(Request $request)
    {
        $types = Type::where('brand_id', $request->brand_id)->pluck('name', 'id');
        return response()->json($types);
    }

    public function getVariants(Request $request)
    {
        $variants = Variant::where('type_id', $request->type_id)->pluck('name', 'id');
        return response()->json($variants);
    }

    //Create function for preview page
    public function create()
    {
        return ('details.create');
    }
    //Storing User and Bike Details.
    public function storeBike(Request $request)
    {
        // Storing user vehicle details into a database
        $data = new Detail(
            [
                'name' => ucwords($request->get('name')),
                'email' => $request->get('email'),
                'phone' => $request->get('phone'),
                'brand_id' => $request->get('brand'),
                'type_id' => $request->get('type'),
                'variant_id' => $request->get('variant'),
                'date' => $request->get('date'),
                'status' => $request->get('status'),
                'yearsBeforePurchase'=> $request->get('yearsBeforePurchase')
            ]);

        $result = $data->save();
        if ($result) {
            $lastInsertedId = $data->id;                                                                                // Save the ID of the Last Details inserted into the form.
            return redirect()->route('company-list', ['id' => $lastInsertedId]);
        } else {
            return redirect()->back()->with('error', 'Details Failed to Upload. Please Try Again...');
        }
    }

    public function about()
    {
        $about = About::first();
        return view($this->pages . 'about')->with(['abouts' => $about]);
    }

    public function contact()
    {
        return view($this->pages . 'contact');
    }

    public function preview($id)
    {
        // Joining brand table, type table, variant table with detail table.
        $data = DB::table('details')
            ->join('brands', 'brands.id', 'details.brand_id')
            ->leftjoin('types', 'types.id', 'details.type_id')
            ->leftjoin('variants', 'variants.id', 'details.variant_id')
            ->select(
                'details.id', 'details.name', 'details.email', 'details.phone', 'details.date', 'details.status','details.yearsBeforePurchase',
                'details.brand_id', 'brands.name as brand_name',
                'details.type_id', 'types.name as type_name',
                'details.variant_id', 'variants.name as variant_name', 'variants.vehicle_cc as val_cc'
            )
            ->where('details.id', $id)->first();

        $company = Company::get();
        $premium = Premium::get();

        $ccData = $data->val_cc;
        $ccAmt = 0;
        foreach ($premium as $premium) {
            if ($ccData >= $premium->min_cc & $ccData <= $premium->max_cc) {
                $ccAmt = $premium->amount;
            }
        }

        return view($this->pages . 'preview')
            ->with(['data' => $data])
            ->with(['company' => $company])
            ->with(['ccAmt' => $ccAmt]);
    }

    public function display($id)
    {
        // Joining brand table, type table, variant table with detail table.
        $data = DB::table('details')
            ->join('brands', 'brands.id', 'details.brand_id')
            ->leftjoin('types', 'types.id', 'details.type_id')
            ->leftjoin('variants', 'variants.id', 'details.variant_id')
            ->select(
                'details.id', 'details.name', 'details.email', 'details.phone', 'details.date', 'details.status','details.yearsBeforePurchase',
                'details.brand_id', 'brands.name as brand_name',
                'details.type_id', 'types.name as type_name',
                'details.variant_id', 'variants.name as variant_name', 'variants.vehicle_cc as val_cc'
            )
            ->where('details.id', $id)->first();

        $company = Company::findorFail($id);
        $premium = Premium::get();

        /*$ccData = $data->val_cc;
        $ccAmt = 0;
        foreach ($premium as $premium) {
            if ($ccData >= $premium->min_cc & $ccData <= $premium->max_cc) {
                $ccAmt = $premium->amount;
            }
        }*/

        return view($this->pages . 'display')
            ->with(['data' => $data])
            ->with(['company' => $company]);
    }
}
