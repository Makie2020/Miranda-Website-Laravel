<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rooms;

class RoomsController extends Controller
{
    public function store() {
        $rooms = Rooms::get();
        return view('rooms', compact('rooms'));
    }
    public function show($id) {
        return view ('roomdetails', ['rooms' => Rooms::findOrFail($id)]);
    }
    public function showOffers() {
        $rooms = Rooms::get();
        return view('offers', compact('rooms'));
    }
};
