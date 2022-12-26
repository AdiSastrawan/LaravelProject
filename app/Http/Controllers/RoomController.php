<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\Package;

use Illuminate\Http\Request;

class RoomController extends Controller
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

            $room = Room::with('packages')
                ->where('room_number', 'LIKE', '%' . $search . '%')
                ->orWhere('max_resident', 'LIKE', '%' . $search . '%')
                ->paginate(5);
        } else if ($filter != null) {
            $room = Room::where('room_booked', '=', $filter)->with('packages')
                ->paginate(5);
        } else {
            $room = Room::paginate(5);
        }
        return view('admin.room/room', compact('room'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $package = Package::all();


        return view('admin.room.room-create', compact('package'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $response = new Room;

        $validasi = $request->validate(
            [
                'resident' => 'required',
                'number' => 'required|numeric',
                'package' => 'required',

            ]
        );
        try {
            $response->max_resident = $validasi['resident'];
            $response->room_number = $validasi['number'];
            $response->package_id = $validasi['package'];

            $response->save();

            return redirect('/room')->with('toast_success', 'Data Sucessfully added');
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
        $room = Room::where('room_id', $id)->with('packages')->first();
        $package = Package::all();
        return view('admin.room.room-edit', compact('room', 'package'));
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
                'resident' => 'required',
                'number' => 'required|numeric',
                'package' => 'required',
            ]
        );
        try {
            $response = Room::where('room_id', $id)->first();
            $response->max_resident = $validasi['resident'];
            $response->room_number = $validasi['number'];
            $response->package_id = $validasi['package'];

            $response->save();


            return redirect('/room')->with('toast_success', 'Data Sucessfully updated');
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
        Room::findOrFail($id)->delete();
        return redirect('/room')->with('toast_success', 'Data Successfully deleted');
    }
}
