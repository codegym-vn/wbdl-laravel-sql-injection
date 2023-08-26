<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/customers', function (Request $request) {
    $id = $request->input('id');

    /*
    $validator = Validator::make(['id' => $id], [
        'id' => 'required|numeric'
    ]);

    if ($validator->fails()) {
        abort(404);
    }
    */

    $customers = DB::table('customers')
        ->whereRaw('id = ?',  $id)->get();
    dump('SELECT * FROM customers WHERE id = ' . $id);
    dd($customers);
});
