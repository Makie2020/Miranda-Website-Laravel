<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Requests\CreateContactRequest;

class ContactController extends Controller
{
    public function create(){
        return view('/details');
    }

    public function store(CreateContactRequest $request){   
        $input = $request->validated();
        $contact = Contact::create($input);
        return redirect('/details');
    }
};
