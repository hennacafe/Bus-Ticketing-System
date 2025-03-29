<?php
use App\Http\Controllers\BusController;
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
/*first*/
Route::get('/', function () {
    return view('welcome');
});
/*from weldome to sign-up*/
Route::get('/sign-up', function () {
    return view('sign-up');
});
Route::get('/', function () {
    return view('welcome');
});

Route::get('/Dashboard1', function () {
    return view('Dashboard1');
});

Route::get('/Bus-manage', function () {
    return view('Bus-manage');
});

Route::get('/Route-Manage', function () {
    return view('Route-Manage');
});

Route::get('/Bus', function () {
    return view('Bus');
});

Route::get('/Settings', function () {
    return view('Settings');
});

Route::get('/logout', function () {
    return view('logout');
});

Route::resource('bus', BusController::class);