<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Middleware\UserHasAdminPrivileges;

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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('save_website', 'SavedWebsiteController@getForm')->name('save_website');
Route::get('save_website/{name}', function(){ return redirect()->route('save_website'); });
Route::post('save_website', 'SavedWebsiteController@postForm')->name('store_website');
Route::delete('save_website/{name}', 'SavedWebsiteController@deleteWebsite')->name('delete_website');

Route::get('contact', 'ContactFormController@getForm')->name('contact');
Route::post('contact', 'ContactFormController@postForm')->name('store_contact');
Route::get('contact_admin', 'ContactFormController@admin_view')->name('contact_admin')->middleware(UserHasAdminPrivileges::class);
Route::get('contact_admin/{id}', 'ContactFormController@viewContact')->name('view_contact')->middleware(UserHasAdminPrivileges::class);
Route::delete('contact_admin/{id}', 'ContactFormController@deleteContact')->name('delete_contact')->middleware(UserHasAdminPrivileges::class);