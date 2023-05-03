<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function store() {
        $contact = Contact::get();
        return view('details', compact('contact'));
    }
    public function postForm(Request $request)
    {   
        return $request;
    }
}
