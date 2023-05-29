<?php
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
// questionn one
Route::get('/',function(){
    return view('page.welcome');
});

// question two
Route::get('/home', function () {
    return redirect('/dashboard', 302);
});

Route::get('/dashboard', function () {
    return view('page.dashboard');
});
// 

// 

//question - 4 Route Middleware create a group route
Route::middleware(['auth'])->group(function () {
    // use /profile rout 
    Route::get('/profile', function () {
        // Your profile logic here...
    });
// use /setting route
    Route::get('/settings', function () {
        // Your settings logic here...
    });
    // use /... route another this group
});

// question 6

Route::get('/contact',function(){
    return view('page.contact');
   });

   Route::post('/sendmail', ContactController::class);