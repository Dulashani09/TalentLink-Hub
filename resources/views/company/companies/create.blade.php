
@extends('company/companies/layout')
<div class="card">
  <div class="card-header">Job Details Page</div>
  <div class="card-body">
      
  
  <form action="{{ route ('company/companies/save')}}" method="POST" >

  @csrf

        <label>Job Type</label></br>
        <input type="text" name="type" id="type" class="form-control"></br>
        <label>Job Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>     
        <label>Description</label></br>
        <input type="text" name="description" id="description" class="form-control"></br>
        <label>Salary</label></br>
        <input type="integer" name="salary" id="salary" class="form-control"></br>     

        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
</body>