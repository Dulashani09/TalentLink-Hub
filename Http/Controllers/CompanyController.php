<?php

namespace App\Http\Controllers;

use App\Models\company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $company = company::orderBy('id', 'desc')->get();
        $total= company::Count();

        return view ('company.companies.home',compact(['company','total']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('company.companies.create');
    }

    /**
     * Store a newly created resource in storage.
     */

    

    public function save(Request $request)
    {
        $validation = $request->validate([
            'type'=>'required',
            'name'=>'required',
            'description'=>'required',
            'salary'=>'required',
        ]);
        $data = company::create($validation);
        if($data){
            session()->flash('success','Job details add successfully');
            return redirect(route('company/companies'));
        } else {
            session()->flash('error','Some problem occure');
            return redirect(route('company/companies/create'));
        }

       
    }

    /**
     * Display the specified resource.
     */
    public function show(String $id)
    {
        $company = company::findOrFail($id);
        return view ('company/companies/show',compact('company')); 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
       $company = company::findOrFail($id);
       return view ('company/companies/update',compact('company')); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $company = company::findOrFail($id);
        $type =  $request->type;
        $name =  $request->name;
        $description =  $request->description;
        $salary =  $request->salary;

        $company->type = $type;
        $company->name = $name;
        $company->description = $description;
        $company->salary = $salary;
        $data = $company->save();

        if($data){
            session()->flash('success','Job details updated successfully');
            return redirect(route('company/companies'));
        } else {
            session()->flash('error','Some problem occure');
            return redirect(route('company/companies/update'));
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        $company = company::findOrFail($id)->delete();

        if($company){
            session()->flash('success','Job details deleted successfully');
            return redirect(route('company/companies'));
        } else {
            session()->flash('error','not deleted successfully');
            return redirect(route('company/companies'));
        }
    }
}