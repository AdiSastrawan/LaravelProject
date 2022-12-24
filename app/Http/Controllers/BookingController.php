<?php

namespace App\Http\Controllers;

use App\Models\Package;
use App\Models\Room;
use App\Models\Price;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function package(){
        //statis menggunakan collection 
        /*$packages=[
            (object)[
            'package_code'=>'Example Code',
            'package_name'=>'Example Name',
            'package_desc'=>'Example Desc',
            ],
            (object)[
            'package_code'=>'Example Code 2',
            'package_name'=>'Example Name 2',
            'package_desc'=>'Example Desc 2',
            ]
        ];*/

        $packages   = Package::all();
        $rooms      = Room::all();
        $prices     = Price::all();
        
        //dd($packages);
        return view('page.booking', compact('packages','rooms', 'prices'));
    }

    public function cart(){      
        $packages   = Package::all();
        $prices     = Price::all();

        return view('page.cart', compact('packages', 'prices'));
    }

    public function add($package_id){
        $package = Package::findOrFail($package_id);
        $cart = session()->get('cart', []);

        if (isset($cart[$package_id])) {
            $cart[$package_id]['qty']++;
        }  
            
        else {
            $cart[$package_id] = [
                "package_name" => $package->package_name,
                "feature_img" => $package->feature_img,
                "monthly_price" => $package->prices->monthly_price,
                "qty" => 1
            ];
        }
    
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Packages add to cart successfully!');
    }

    public function remove(Request $request){
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Packages successfully removed!');
        }
    }

    public function update(Request $request){
        if($request->id && $request->qty){
            $cart = session()->get('cart');
            $cart[$request->id]["qty"] = $request->qty;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart successfully updated!');
        }
    }
}
