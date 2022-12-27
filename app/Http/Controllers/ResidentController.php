<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rents;

class ResidentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rent = Rents::with('users')->with('rooms')->paginate(5);
        return view('admin.resident.resident', compact('rent'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $rent = Rents::find($id)->with('users')->with('rooms')->get()->first();
        return view('admin.resident.resident-detail', compact('rent'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $rent       = Rents::find($id)->with('users')->with('rooms')->get()->first();

        if($rent->validation == '0') {
            $rent->validation == '1';
        }

        //dd($rent);
        return view('admin.resident.resident', compact('rent', 'users', 'rooms'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Rents::findOrFail($id)->delete();
        return redirect('/resident')->with('toast_success', 'Data Successfully deleted');
    }
}
