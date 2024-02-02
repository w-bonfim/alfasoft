<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(Contact $contact)
    {
        $contacts = $contact->all();

        return view("admin/index", ["contacts" => $contacts]);
    }

    public function create()
    {
        return view("admin/create");
    }

    public function store(Request $request) 
    {
        dd($request->all());
    }
}
