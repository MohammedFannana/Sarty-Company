<?php

namespace App\Http\Controllers;

use App\Models\CompanyInformation;
use Illuminate\Http\Request;

class CompanyInformationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $companies = CompanyInformation::all();
        return view('dashboard.company.index', compact('companies'));
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
    }

    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $company = CompanyInformation::findOrFail($id);
        return view('dashboard.company.edit', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $request->validate([
            'header_text' => ['string'],
            'about_company_introduction' => ['string'],
            'about_company_details' => ['string'],
            'service_introduction' => ['string'],
            'course_introduction' => ['string'],
            'project_introduction' => ['string'],
            'team_introduction' => ['string'],
            'contact_introduction' => ['string'],
            'address' => ['string'],
            'gmail' => ['email'],

        ]);

        $company = CompanyInformation::findOrFail($id);
        $information = $request->all();
        $company->update($information);



        return redirect()->route('dashboard.company.index')->with('success', 'The Company Information is Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CompanyInformation $companyInformation)
    {
        //
    }
}
