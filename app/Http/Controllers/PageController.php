<?php

namespace App\Http\Controllers;

use App\Models\Package;
use App\Models\Room;
use App\Models\Price;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function landing(){
        $packages   = Package::all();
        $prices     = Price::all();

        if(Auth::check()){
            if(Auth::user()->role == '1'){
                return redirect('/admin');
            }else{

                return view('client.landing',['title'=>"home"], compact('packages', 'prices'));
            }
        }else{
            return view('client.landing',['title'=>"home"], compact('packages', 'prices'));
        }
    }
}
