<?php

namespace App\Http\Controllers;

use App\Models\Package;
use App\Models\Room;
use App\Models\Rents;
use App\Models\Price;
use App\Models\Review;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function package()
    {
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
        $rooms      = Room::where('room_booked', 0)->get();
        $prices     = Price::all();

        //dd($packages);
        return view('client.booking.packages', compact('packages', 'rooms', 'prices'));
    }

    public function details($package_id)
    {
        $item = Package::where('package_id', $package_id)->get()->first();
        $rooms = Room::select('room_number', 'room_id')->where('package_id', $package_id)->where('room_booked', 0)->get();
        $reviews = Review::all();

        //dd($item);
        return view('client.booking.details', ['package' => $item], compact('reviews', 'rooms'));
    }

    public function cart()
    {
        // $cart = session()->get('cart');
        // unset($cart[4]);
        // session()->put('cart', $cart);
        return view('client.booking.cart');
    }

    public function add(Request $request)
    {

        // $package = Package::findOrFail($package_id);

        $cart = session()->get('cart', []);
        $room_number = Room::where('room_id', '=', $request->room)->first();
        if ($room_number != null) {

            $room_number->room_booked = true;
            $room_number->save();
        }
        if (isset($cart[$request->room])) {
            $cart[$request->room];
        } else {
            $cart[$request->room] = [
                "room_id" => $request->room,
                "room" => $room_number->room_number,
                "trash_bank" => $request->trash,
                "laundry" => $request->laundry,
                "resident_name" => $request->name,
                "resident_gender" => $request->gender,
                "resident_telp" => $request->number,
                "resident_email" => $request->email,
                "start_date" => $request->start_date,
                "end_date" => $request->end_date,
                "total" => $request->total

            ];
        }



        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Packages add to cart successfully!');
    }

    public function remove(Request $request)
    {
        dd($request->id);
        if ($request->id) {
            $cart = session()->get('cart');
            if (isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Packages successfully removed!');
        }
    }

    public function update(Request $request)
    {
        if ($request->id && $request->qty) {
            $cart = session()->get('cart');
            $cart[$request->id]["qty"] = $request->qty;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart successfully updated!');
        }
    }

    public function history()
    {
        $rents = Rents::where('id', Auth::user()->id)->with('users')->with('rooms')->get();

        return view('client.booking.history', compact('rents'));
    }

    public function index()
    {
        $reviews = Review::all();
        return view('client.booking.details', compact('reviews'));
        //dd($reviews);
    }
    public function store()
    {
        $cart = session()->get('cart');

        foreach ($cart as $c) {

            $store = new Rents;
            $store->id = Auth::user()->id;;
            $store->room_id = $c['room_id'];
            $store->trash_bank = $c['trash_bank'];
            $store->laundry = $c['laundry'];
            $store->total_price = $c['total'];
            $store->resident_name = $c['resident_name'];
            $store->resident_gender = $c['resident_gender'];
            $store->resident_telp = $c['resident_telp'];
            $store->resident_email = $c['resident_email'];
            $store->date_started = $c['start_date'];
            $store->date_ended = $c['end_date'];
            $store->save();

            unset($cart[$c['room_id']]);
            session()->put('cart', $cart);
        }
        return redirect()->back()->with('success', 'Packages add to cart successfully!');
    }
}
