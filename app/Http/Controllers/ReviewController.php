<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $item = Package::where('package_id', $package_id)->get()->first();
        $reviews = Review::all();
        $packages   = Package::all();

        return view('client.booking.details', ['package' => $item], compact('reviews'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     $reviews=Review::all();
    //     return view('client.booking.details', compact('reviews'));
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validation = $request->validate([
            'package_id' => '',
            'rating'        => 'required',
            'description'   => 'required',
        ]);

        $validation['user_id'] = Auth::id();
        Review::create($validation);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $reviews = Review::find($id);
        return view('client.review.edit-reviews', compact('reviews'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validation = $request->validate([
            'rating'        => 'required',
            'description'   => 'required',
        ]);

        $validation['user_id'] = Auth::id();
        $review = Review::where('id', $id);
        $review->update($validation);
        $package_id = $review->get()->first();
        return redirect('details/' . $package_id->package_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Review::findOrFail($id)->delete();
        return redirect()->back();
    }
}
