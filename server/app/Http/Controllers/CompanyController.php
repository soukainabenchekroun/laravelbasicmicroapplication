<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {
        return Company::all();
    }

    public function show($id)
    {
        return Company::find($id);
    }

    public function store(Request $request)
    {
        return Company::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $Company = Company::findOrFail($id);
        $Company->update($request->all());
        return $Company;
    }

    public function delete(Request $request, $id)
    {
        $Company = Company::findOrFail($id);
        $Company->delete();
        return 204;
    }
}
