<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Package;
use App\Models\Price;



class PackageController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->search;
        $package = Package::where('package_code', 'LIKE', '%' . $search . '%')
            ->orWhere('package_name', 'LIKE', '%' . $search . '%')
            ->orWhere('package_desc', 'LIKE', '%' . $search . '%')
            ->paginate(5);
        return view('admin.package.package', compact('package'));
    }
    //start package
    public function edit($id)
    {
        $package = Package::where('package_id', $id)->with('prices')->get()->first();
        return view('admin.package.package-edit', compact('package'));
    }
    public function show($id)
    {

        return view('admin.package.package');
    }
    public function create()
    {
        $price = Price::all();
        return view('admin.package.package-create', compact('price'));
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
                'price' => 'required|numeric'
            ]
        );
        try {
            $response->package_code = $validasi['code'];
            $response->package_name = $validasi['name'];
            $response->package_desc = $validasi['desc'];
            $response->price_id = $validasi['price'];
            if ($request->hasFile('img')) {
                $response->feature_img = $request->file('img')->getClientOriginalName();
                $request->file('img')->move(public_path() . '/img', $response->feature_img);
            }
            $response->save();
            return redirect('/package');
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
                'price' => 'required|numeric'
            ]
        );
        try {
            $response = Package::where('package_id', $id)->with('prices')->first();
            $response->package_code = $validasi['code'];
            $response->package_name = $validasi['name'];
            $response->package_desc = $validasi['desc'];
            if ($request->hasFile('img')) {
                $response->feature_img = $request->file('img')->getClientOriginalName();
                $request->file('img')->move(public_path() . '/img', $response->feature_img);
            }
            $response->save();
            return redirect('/package');
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }
    public function destroy($id)
    {
        Package::findOrFail($id)->delete();
        return redirect('/package');
    }
    //end package
    // public function room(Request $request){
    //     $search = $request->search;
    //     $package = Room::
    //     paginate(5);
    //     return view('admin.package');
    // }
}
