<?php


use App\Http\Controllers\JobController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\SessionController;
use App\Mail\JobPosted;
use Illuminate\Support\Facades\Route;



Route::view('/','home');
Route::get('test',function (){
    \Illuminate\Support\Facades\Mail::to('sajadmulk000@gmail.com')->send(
        new JobPosted()
    );
    return 'Mail Sent';
});


Route::controller(JobController::class)->group(function (){
    Route::get('job','index');
    Route::get('jobs/create','create');
    Route::get('/jobs/{job}','show');
    Route::post('/job','store');
    Route::get('/jobs/{job}/edit','edit')->middleware('auth')->can('edit','job');
    Route::patch('/jobs/{job}','update');
    Route::delete('/jobs/{job}','destroy');
});

Route::controller(RegistrationController::class)->group(function (){
   Route::view('/register','auth.registerationForm');
   Route::post('/register','store');
});

Route::controller(SessionController::class)->group(function (){
    Route::view('/login','auth.loginForm');
    Route::post('/login','store');
    Route::post('/logout','destroy');

});



//Route::resource('jobs', JobController::class);

Route::view('/contact','contact');

//require __DIR__.'/auth.php';
