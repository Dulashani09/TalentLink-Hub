<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $usertype = Auth()->user()->usertype;

        if($usertype=='jobseeker'){

        return view('jobseeker.jobseekerdashboard');

        }
        else if($usertype=='company'){

            return view('company.companydashboard');
    
            }
    }
}
