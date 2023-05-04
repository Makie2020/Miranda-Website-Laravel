<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bookings;

class SearchAvailibilityController extends Controller
{

    public function search(Request $request)
    {
        $validatedData = $request->validate([
            'checkin' => ['required'],
            'checkout' => ['required'],
        ]);
        $checkinDate = $validatedData -> input('checkin');
        $checkoutDate = $validatedData -> input('checkout');
        
        $search= DB::table('bookings')->select()
            ->where('checkin', '<=', $checkinDate)
            ->where('checkout', '>=', $checkoutDate)
            ->get();
        dd($search);

        return view('/roomdetails.blade.php', compact('search'));
    }
}
