<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Room;
use App\Models\Package;

class AdminController extends Controller
{
    public function index()
    {
        $admin_data = User::where('role', 1)->get();
        $room = Room::where('room_booked', 0)->count();
        $package = Package::count();
        $admin = User::where('role', '=', 1)->count();
        $user = User::where('role', '=', 0)->count();
        $data = [
            'user' => $user,
            'admin' => $admin, 'data_admin' => $admin_data, 'package' => $package, 'room' => $room
        ];
        return view('admin.master', compact('data'));
    }
}
