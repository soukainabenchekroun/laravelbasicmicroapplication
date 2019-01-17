<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return Contact::with('Company')->get();
    }

    public function show($id)
    {
        return Contact::with('Company')->find($id);
    }

    public function store(Request $request)
    {
        return Contact::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $Contact = Contact::findOrFail($id);
        $Contact->update($request->all());
        return $Contact;
    }

    public function delete(Request $request, $id)
    {
        $Contact = Contact::findOrFail($id);
        $Contact->delete();
        return 204;
    }
}
