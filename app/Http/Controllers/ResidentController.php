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
    public function index(Request $request)
    {
        $search = $request->search;
        $filter = $request->filter;
        if ($search != null) {

            $rent = Rents::where('resident_name', 'LIKE', '%' . $search . '%')
                ->orWhere('email', 'LIKE', '%' . $search . '%')
                ->orWhere('total_price', 'LIKE', '%' . $search . '%')

                ->paginate(5);
        } else if ($filter != null) {
            $rent = Rents::where('validation', '=', $filter)
                ->paginate(5);
        } else {

            $rent = Rents::with('users')->with('rooms')->paginate(5);
        }
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
        $rent  = Rents::find($id)->with('users')->with('rooms')->get()->first();

        if ($rent->validation == 0) {
            $rent->validation = 1;
            $rent->save();
        }

        //dd($rent);
        return redirect()->back()->with('toast_success', "Successfully validate the rent");
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
