<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Package;
use App\Models\Price;


class AdminController extends Controller
{
    public function index(){
        return view('admin.master');
    }

    public function package(){
        $package = Package::all();
        return view('admin.package',compact('package'));
    }
    public function packageEdit($id){
        $package = Package::where('package_id',$id)->with('prices')->get()->first();
        return view('admin.package-edit',compact('package'));
    }
    public function packageCreate(){
        $price = Price::all();
        return view('admin.package-create',compact('price'));
    }
    public function packageStore(Request $request){
        $response = new Package;

        $validasi=$request->validate(
            [
                'code'=>'required',
                'name'=>'required',
                'name'=>'required',
                'desc'=>'required',
                'img'=>'image|mimes:jpg,png,jpeg,gif,svg,PNG|max:2048',
                'price'=>'required|numeric'
            ]
            );
        try{
            $response->package_code = $validasi['code'];
            $response->package_name = $validasi['name'];
            $response->package_desc = $validasi['desc'];
            $response->price_id = $validasi['price'];
            if($request->hasFile('img')){
                $response->feature_img = $request->file('img')->getClientOriginalName();
                $request->file('img')->move(public_path().'/img',$response->feature_img);
            }
            $response->save();
            return redirect('/package');
        }catch(\Exception $e){
            echo $e->getMessage();
        }
    }
    public function packageUpdate(Request $request){
        $validasi=$request->validate(
            [
                'code'=>'required',
                'name'=>'required',
                'name'=>'required',
                'desc'=>'',
                'img'=>'image|mimes:jpg,png,jpeg,gif,svg,PNG|max:2048',
                'price'=>'required|numeric'
            ]
            );
            try{
                $response = Package::where('package_id',$request->id)->with('prices')->first();
                $response->package_code = $validasi['code'];
                $response->package_name = $validasi['name'];
                $response->package_desc = $validasi['desc'];
                if($request->hasFile('img')){
                    $response->feature_img = $request->file('img')->getClientOriginalName();
                    $request->file('img')->move(public_path().'/img',$response->feature_img);
                }
                $response->save();
                return redirect('/package');
            }catch(\Exception $e){
                echo $e->getMessage();
            }
    }
    public function packageDestroy($id){
        Package::find($id)->delete();
        return redirect('/package');
    }
}
