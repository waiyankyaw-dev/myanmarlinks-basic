<?php

use App\Customer;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('test-students', function () {
    $students = Student::get();
    $students = Student::find();
    $students = Student::findOrFail(5);
    $students = Student::paginate(10);
    return $students;
});

Route::get('test-customer', function () {
    $customers = Customer::get();
    foreach($customers as $customer){
        var_dump($customer->fullName);
    }

});