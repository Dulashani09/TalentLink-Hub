@extends('company/companies/layout')
@section('content')
 
<div class="card" >
  <div class="card-header">Job Details Page</div>
  <div class="card-body">
      
  <form action="{{ route('company/companies/update', $company->id) }}" method="POST">
        @csrf
        @method('PUT')

       
        <label>Job Type</label></br>
        <input type="text" name="type" id="type" value="{{$company->type}}" class="form-control"></br>
        <label>Job Name</label></br>
        <input type="text" name="name" id="name" value="{{$company->name}}" class="form-control"></br>
        <label>Description</label></br>
        <input type="text" name="description" id="description" value="{{$company->description}}" class="form-control"></br>
         <label>Salary</label></br>
        <input type="integer" name="salary" id="salary" value="{{$company->salary}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop