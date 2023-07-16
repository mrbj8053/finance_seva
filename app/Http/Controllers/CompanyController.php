<?php

namespace App\Http\Controllers;

use App\Helper\myhelper;
use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $company=Company::find(1);
        return view('admin.company',compact('company'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Company $company)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Company $company)
    {
        $this->validate($request,[
            'name'=>'required|string',
            'email'=>'email',
            'mobile'=>'numeric',
            'address'=>'string',
            'level_income_type'=>'required|in:All,Packagewise',
            'reward_income_type'=>'required|in:All,Packagewise',
        ]);
        if($company->update($request->all()))
        {
            myhelper::showMessage('Company updated successfully');

        }
        else
        {
            myhelper::showMessage('Unable to update company details, Please try after some time.',true);
        }
       return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Company $company)
    {
        //
    }
}
