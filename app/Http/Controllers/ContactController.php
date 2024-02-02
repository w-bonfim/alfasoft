<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactRequest;
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

    public function store(StoreContactRequest $request, Contact $contact) 
    {
        $contact->create($request->all());
        return redirect()->route('contact.index')->with('message','Contato cadastrado com sucesso!');
    }

    public function show(int $id)
    {
        if (!$contact = Contact::find($id)) {
            return back()->with('message','Contato não encontrado.');
        }

        return view("admin/show", compact('contact'));
    }

    public function edit(int $id, Contact $contact)
    {
        if (!$contact = $contact->where('id', $id)->first()) {
            return back()->with('message','Contato não encontrado.');
        }
   
        return view("admin/edit", compact('contact'));
    }

    public function update(StoreContactRequest $request, Contact $contact, int $id) 
    {
        if (!$contact = $contact->find($id)) {
            return back();
        }

        $contact->update($request->only([
            'name', 'phone', 'email'
        ]));

        return redirect()->route('contact.index', $contact->id)->with('message','Contato atualizado com sucesso!');
    }

    public function destroy(int $id, Contact $contact) 
    {
        if (!$contact = $contact->find($id)) {
            return back()->with('message','Contato não encontrado.');
        }
      
        $contact->delete();

        return redirect()->route('contact.index', $contact->id)->with('message','Contato deletado com sucesso!');
    }
}
