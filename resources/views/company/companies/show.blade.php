@extends('company/companies/layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Job Details Page</div>
  <div class="card-body">
   
 
    
        <p class="card-title">Job Type : {{ $company->type }}</p>
        <p class="card-text">Job Name : {{ $company->name }}</p>
        <p class="card-text">Description : {{ $company->description }}</p>
        <p class="card-text">Salary : {{ $company->salary }}</p>
  </div>
       
    </hr>
  
  </div>
</div>