<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Employee;
use App\Employee1;
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


Auth::routes();

Route::get('/home', function () {
    $jumlahsuratmasuk=Employee::count();
    
    $jumlahsuratkeluar=Employee1::count();
    return view('home',compact('jumlahsuratmasuk','jumlahsuratkeluar'));
});

Route::get('/suratmasuk','EmployeeController@index')->name('suratmasuk');

Route::get('/tambahsuratmasuk','EmployeeController@tambahsuratmasuk')->name('tambahsuratmasuk');
Route::post('/insertdata1','EmployeeController@insertdata1')->name('insertdata1');

Route::get('/tampilkandata/{id}','EmployeeController@tampilkandata')->name('tampilkandata');
Route::post('/updatedata/{id}','EmployeeController@updatedata')->name('updatedata');

Route::get('/delete1/{id}','EmployeeController@delete1')->name('delete1');
// export pdf

 Route::get('/exportpdf2/{id}','EmployeeController@exportpdf2')->name('exportpdf2');

// surat keluar

Route::get('/suratkeluar','Employee1Controller@index')->name('suratkeluar');

Route::get('/tambahsuratkeluar','Employee1Controller@tambahsuratkeluar')->name('tambahsuratkeluar');
Route::post('/insertdata','Employee1Controller@insertdata')->name('insertdata');

Route::get('/tampilkandata1/{id}','Employee1Controller@tampilkandata1')->name('tampilkandata1');
Route::post('/updatedata1/{id}','Employee1Controller@updatedata1')->name('updatedata1');

Route::get('/delete/{id}','Employee1Controller@delete')->name('delete');
// export pdf
Route::get('/exportpdf','Employee1Controller@exportpdf')->name('exportpdf');

Route::get('/exportpdf12/{id}','Employee1Controller@exportpdf12')->name('exportpdf12');


// Route::get('pegawai','PegawaiController@index')->name('get.pegawai');
