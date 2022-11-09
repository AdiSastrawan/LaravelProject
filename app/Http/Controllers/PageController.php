<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function loginPage(){
        return view('pages.login');
    }

    public function landingPage(){
        return view('pages.index');
    }

    public function bookingPage(){
        return view('pages.booking');
    }

    public function bookingDetailsPage(){
        return view('pages.bookingDetails');
    }
}
