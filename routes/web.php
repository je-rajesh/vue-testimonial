<?php

use App\Models\Testimonial;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/testimonials', function () {
    $testimonials = Testimonial::all();

    $object['testimonials'] = $testimonials;
    $object['status'] = 200;
    $object['message'] = 'data fetched successfully';

    return response()->json($object, 200);
});
