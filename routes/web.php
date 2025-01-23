<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobseekerController;
use App\Http\Controllers\CompanyController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/contactus', function () {
    return view('contactus'); 
});

Route::get('/aboutus', function () {
    return view('aboutus'); 
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//role dashboard
Route::middleware('auth')->group(function () {
    Route::get('jobseeker/jobseekerdashboard',[JobseekerController::class,'dashboard'])->name('jobseeker.jobseekerdashboard');
    Route::get('company/companydashboard',[CompanyController::class,'dashboard'])->name('company.companydashboard');
});



Route::get('company/companies', [CompanyController::class, 'index'])->name('company/companies');
Route::get('company/companies/create', [CompanyController::class, 'create'])->name('company/companies/create');
Route::get('company/companies/store', [CompanyController::class, 'store'])->name('company/companies/store');
Route::get('company/companies/edit/{id}', [CompanyController::class, 'edit'])->name('company/companies/edit');
Route::put('company/companies/edit/{id}', [CompanyController::class, 'update'])->name('company/companies/update');
Route::delete('company/companies/delete/{id}', [CompanyController::class, 'delete'])->name('company/companies/delete');
Route::get('company/companies/show/{id}', [CompanyController::class, 'show'])->name('company/companies/show');
Route::post('company/companies/save', [CompanyController::class, 'save'])->name('company/companies/save');