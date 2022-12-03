<?php

namespace App\Http\Controllers;

use App\Models\Package;
use App\Models\Room;
use App\Models\Price;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function loginPage(){
        return view('page.login');
    }

    public function landingPage(){
        return view('page.landing',['title'=>"home"]);
    }

    public function bookingPage(){
        //statis
        /*
        $packages=[
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
        ];
        */
        $packages=Package::all();
        $rooms=Room::all();
        $prices=Price::all();
        return view('page.booking', compact('packages','rooms', 'prices'));
    }

    public function bookingDetailsPage(){
        return view('page.booking-details',['title'=>"booking-details"]);
    }
}
