<?php

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

Route::get('/email_receipt', function () {
    return view('email_receipt');
});

Route::get('/facebook', function () {
    return view('facebook');
});

Route::get('/get_token', function () {
    return view('get_token');
});

Route::get('/', function () {
    return view('google');
});

Route::get('/ipad_checkout', function () {
    return view('ipad_checkout');
});

Route::get('/ipad_dashboard', function () {
    return view('ipad_dashboard');
});

Route::get('/ipad_premium_cal', function () {
    return view('ipad_premium_cal');
});

Route::get('/ipad_product_detail', function () {
    return view('ipad_product_detail');
});
Route::get('/ipad_purchase_success', function () {
    return view('ipad_purchase_success');
});

Route::get('/ipad_telesales', function () {
    return view('ipad_telesales');
});

Route::get('/ipad_dashboard', function () {
    return view('ipad_dashboard');
});

Route::get('/ipad_premium_cal_bk', function () {
    return view('ipad_premium_cal_bk');
});

Route::get('/ipad_product_detail_bk', function () {
    return view('ipad_product_detail_bk');
});

Route::get('/ipad_telesales', function () {
    return view('ipad_telesales');
});

Route::get('/online_checkout', function () {
    return view('online_checkout');
});

Route::get('/online_health_question', function () {
    return view('online_health_question');
});

Route::get('/online_personal_question', function () {
    return view('online_personal_question');
});

Route::get('/online_premium_cal', function () {
    return view('online_premium_cal');
});

Route::get('/online_product_detail', function () {
    return view('online_product_detail');
});

Route::get('/online_purchase_success', function () {
    return view('online_purchase_success');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/search_google', function () {
    return view('search_google');
});

Route::get('/survey', function () {
    return view('survey');
});

Route::get('/thank_you', function () {
    return view('thank_you');
});

Route::get('/Website-2ndTime', function () {
    return view('Website-2ndTime');
});

Route::get('/Website-FNA', function () {
    return view('Website-FNA');
});

Route::get('/Website-FNA-01', function () {
    return view('Website-FNA-01');
});

Route::get('/Website-FNA-02', function () {
    return view('Website-FNA-02');
});

Route::get('/Website-FNA-03', function () {
    return view('Website-FNA-03');
});

Route::get('/Website-FNA-04', function () {
    return view('Website-FNA-04');
});

Route::get('/Website-FNA-05', function () {
    return view('Website-FNA-05');
});
Route::get('/Website-FNA-06', function () {
    return view('Website-FNA-06');
});
Route::get('/Website-FNA-07', function () {
    return view('Website-FNA-07');
});
Route::get('/Website-FNA-08', function () {
    return view('Website-FNA-08');
});
Route::get('/Website-FNA-09', function () {
    return view('Website-FNA-09');
});
Route::get('/Website-FNA-09', function () {
    return view('Website-FNA-09');
});

//api 1
Route::get('/drop-off', function () {
    $DropOffController = new \App\Http\Controllers\DropOffController();
    $DropLead  = $DropOffController->DropLead(null);
//    dd($DropLead);
    return redirect('/Website-FNA');
});

//api 2
Route::get('/leadUpdate', function () {
    $DropOffController = new \App\Http\Controllers\DropOffController();
    $leadUpdate = $DropOffController->leadUpdate(null);
//    dd($leadUpdate);
    return redirect('/online_purchase_success');
});

//api 3
Route::get('/drop-off2', function () {
    $DropOffController = new \App\Http\Controllers\DropOffController();
    $DropLead  = $DropOffController->DropLead2(null);
//    dd($DropLead);
    return redirect('/register');
});









