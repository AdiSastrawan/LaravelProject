<?php

namespace App\Http\Controllers;

use RealRashid\SweetAlert\Facades\Alert;


use Illuminate\Http\Request;
use App\Models\Package;
use App\Models\Facilities;
use App\Models\Price;



class PackageController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->search;
        $filter = $request->filter;
        if ($search != null) {
            $package = Package::where('package_code', 'LIKE', '%' . $search . '%')
                ->orWhere('package_name', 'LIKE', '%' . $search . '%')
                ->orWhere('package_desc', 'LIKE', '%' . $search . '%')
                ->paginate(5);
        } else if ($filter != null) {
            $package = Package::where('package_code', '%' . $filter . '%')

                ->paginate(5);
        } else {
            $package = Package::paginate(5);
        }
        return view('admin.package.package', compact('package', 'search', 'filter'));
    }
    //start package
    public function edit($id)
    {
        $package = Package::where('package_id', $id)->with('prices')->with('facilities')->get()->first();
        $price = Price::all();
        $facility = Facilities::all();
        return view('admin.package.package-edit', compact('package', 'facility', 'price'));
    }
    public function show($id)
    {
        $package = Package::where('package_id', $id)->with('prices')->with('facilities')->get()->first();
        return view('admin.package.package-detail', compact('package'));
    }
    public function create()
    {
        $price = Price::all();
        $facility = Facilities::all();


        return view('admin.package.package-create', compact('price', 'facility'));
    }
    public function store(Request $request)
    {
        $response = new Package;

        $validasi = $request->validate(
            [
                'code' => 'required',
                'name' => 'required',
                'name' => 'required',
                'desc' => 'required',
                'img' => 'image|mimes:jpg,png,jpeg,gif,svg,PNG|max:2048',
                'price' => 'required|numeric',
                'facility' => 'required'
            ]
        );
        try {
            $response->package_code = $validasi['code'];
            $response->package_name = $validasi['name'];
            $response->package_desc = $validasi['desc'];
            $response->price_id = $validasi['price'];
            $response->facility_id = $validasi['facility'];
            if ($request->hasFile('img')) {
                $response->feature_img = $request->file('img')->getClientOriginalName();
                $request->file('img')->move(public_path() . '/img', $response->feature_img);
            }
            $response->save();

            return redirect('/package')->with('toast_success', 'Data Sucessfully added');
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }
    public function update(Request $request, $id)
    {
        $validasi = $request->validate(
            [
                'code' => 'required',
                'name' => 'required',
                'name' => 'required',
                'desc' => '',
                'img' => 'image|mimes:jpg,png,jpeg,gif,svg,PNG|max:2048',
                'price' => 'required|numeric',
                'facility' => 'required'
            ]
        );
        try {
            $response = Package::where('package_id', $id)->first();
            $response->package_code = $validasi['code'];
            $response->package_name = $validasi['name'];
            $response->package_desc = $validasi['desc'];
            $response->facility_id = $validasi['facility'];
            $response->price_id = $validasi['price'];
            if ($request->hasFile('img')) {
                $response->feature_img = $request->file('img')->getClientOriginalName();
                $request->file('img')->move(public_path() . '/img', $response->feature_img);
            }
            $response->save();

            return redirect('/package')->with('toast_success', 'Data Sucessfully updated');
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }
    public function destroy($id)
    {
        Package::findOrFail($id)->delete();
        return redirect('/package')->with('toast_success', 'Data Successfully deleted');
    }
    //end package

}
