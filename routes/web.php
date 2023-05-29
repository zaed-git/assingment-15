<?php
use App\Http\Controllers\RegisterController;
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
 




///////////////////////////////////////////////////////
// question 1
//////////////////////////////////////////////////////

Route::get('/signup ', function () {
    return view('page.signup');
});
// question 1 request validation for a registration form 
Route::post('/register ', [RegisterController::class,'registerUser']);

///////////////////////////////////////////
//////////////////////////////////////////


//////////////////////////////////////////////////
//////////////////////////////////////////////////
// question two
Route::get('/home', function () {
    return redirect('/dashboard', 302);
});

Route::get('/dashboard', function () {
    return view('page.dashboard');
});



//////////////////////////////////////
//////////////////////////////////////
//question - 4 Route Middleware create a group route
Route::middleware(['auth'])->group(function () {
    // use /profile rout 
    Route::get('/profile', function () {
       
    });
// use /setting route
    Route::get('/settings', function () {
        
    });
    // use /... route another this group
});



////////////////////////////////////
///////////////////////////////////
Route::get('/contact',function(){
    return view('page.contact');
   });


//    question 6 --- single action controller 
   Route::post('/sendmail', ContactController::class);

///////////////////////////////////////////////////////

////////////////////////////////////////////
// questionn 8 blade template engine
////////////////////////////////////////////
Route::get('/',function(){
    return view('page.welcome');
});

////////////////////////////////////
//////////////////////////////////

