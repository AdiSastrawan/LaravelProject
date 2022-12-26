<?php

namespace App\Http\Controllers;

use App\Models\Facilities;
use Illuminate\Http\Request;

class FacilityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $facility = Facilities::all();
        return view('admin.facilities.facility', compact('facility'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.facilities.facility-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $response = new Facilities;
        $validasi = $request->validate(
            [
                'size' => 'required',
                'cupboard' => 'required',
                'chair' => 'required',
                'desk' => 'required',
                'bed' => 'required',
                'pillow' => 'required',
                'toilet' => 'required',
                'tub' => 'required',
                'shower' => 'required',
                'ac' => 'required',
                'window' => 'required',
                'mirror' => 'required',
                'electricity' => 'required',
                'water' => 'required'
            ]
        );
        try {
            $response->size = $validasi['size'];
            $response->cupboard = $validasi['cupboard'];
            $response->chair = $validasi['chair'];
            $response->desk = $validasi['desk'];
            $response->bed = $validasi['bed'];
            $response->pillow = $validasi['pillow'];
            $response->toilet = $validasi['toilet'];
            $response->tub = $validasi['tub'];
            $response->shower = $validasi['shower'];
            $response->ac = $validasi['ac'];
            $response->window = $validasi['window'];
            $response->mirror = $validasi['mirror'];
            $response->electricity = $validasi['electricity'];
            $response->water = $validasi['water'];

            $response->save();

            return redirect('/facility')->with('toast_success', 'Data Sucessfully updated');
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $facility = Facilities::find($id)->with('packages')->get()->first();
        return view('admin.facilities.facility-detail', compact('facility'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $facility = Facilities::where('facility_id', $id)->first();
        return view('admin.facilities.facility-edit', compact('facility'));
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
        $validasi = $request->validate(
            [
                'size' => 'required',
                'cupboard' => 'required',
                'chair' => 'required',
                'desk' => 'required',
                'bed' => 'required',
                'pillow' => 'required',
                'toilet' => 'required',
                'tub' => 'required',
                'shower' => 'required',
                'ac' => 'required',
                'window' => 'required',
                'mirror' => 'required',
                'electricity' => 'required',
                'water' => 'required'
            ]
        );
        try {
            $response = Facilities::where('facility_id', $id)->first();
            $response->size = $validasi['size'];
            $response->cupboard = $validasi['cupboard'];
            $response->chair = $validasi['chair'];
            $response->desk = $validasi['desk'];
            $response->bed = $validasi['bed'];
            $response->pillow = $validasi['pillow'];
            $response->toilet = $validasi['toilet'];
            $response->tub = $validasi['tub'];
            $response->shower = $validasi['shower'];
            $response->ac = $validasi['ac'];
            $response->window = $validasi['window'];
            $response->mirror = $validasi['mirror'];
            $response->electricity = $validasi['electricity'];
            $response->water = $validasi['water'];

            $response->save();

            return redirect('/facility')->with('toast_success', 'Data Sucessfully updated');
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Facilities::findOrFail($id)->delete();
        return redirect('/facilities')->with('toast_success', 'Data Successfully deleted');
    }
}
