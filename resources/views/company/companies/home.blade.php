@extends('company/companies/layout')
<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-blue overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
    
                    <div>
                        <h1>Manage Job Details</h1><br>
                        <a href="{{ route ('company/companies/create')}}" class="btn btn-primary">Add Job Details</a>
                    </div>
                    
                    @if(Session::has('success'))
                    <div class="alert alert-success" role="alert" >
                        {{Session::get('success')}}
                    </div>
                    @endif

                    <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Job Type</th>
                                        <th>Job Name</th>
                                        <th>Description</th>
                                        <th>Salary</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($company as $company)
                                    <tr>        
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $company->type }}</td>
                                    <td>{{ $company->name }}</td>
                                    <td>{{ $company->description }}</td>
                                    <td>{{ $company->salary }}</td>
                                    <td>

                                 <a href="{{ route('company/companies/show',$company->id) }}" type="button" class="btn btn-secondary">View</a>
                                <a href="{{ route('company/companies/update', $company->id) }}" type="button" class="btn btn-warning">Edit</a>
                                <form action="{{ route('company/companies/delete', $company->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                    @csrf
                                    @method('DELETE')

                                                <button type="submit" class="btn btn-danger" title="Delete detail" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                </div>
            </div>
        </div>
    </div>

