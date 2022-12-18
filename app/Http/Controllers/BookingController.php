<?php

namespace App\Http\Controllers;

use App\Models\Package;
use App\Models\Room;
use App\Models\Price;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function viewPackage(){
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
}
