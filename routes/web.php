<?php

/*f
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','HomeController@show');
route::get('/logout','\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/category/{cat}','CategoryController@show');
Route::get('/search','SearchController@show');

Route::get('/signup','SignupController@show');
Route::post('/signup','SignupController@reg');

Route::get('/product/{id}','ViewController@show');
Route::get('/order/{product}','OrderController@placeOrder');
Route::get('/displayorder/{product}','OrderController@show');


Auth::routes();
Route::get('/', 'HomeController@index')->name('home');

//ADMINPANEL
Route::get('/adminpanel/showbestdeals','AdminpanelController@viewBestDeals')->middleware('admincheck');
Route::get('/adminpanel/showproducts', 'AdminpanelController@viewShowProduct')->middleware('admincheck');
Route::get('/adminpanel/showusers', 'AdminpanelController@viewUsers')->middleware('admincheck');
Route::post('/adminpanel/addproduct','ProductController@store')->middleware('admincheck');
Route::post('/adminpanel/{id}/edit','ProductController@edit')->middleware('admincheck');
Route::get('/adminpanel/addproduct','ProductController@index')->middleware('admincheck');
Route::get('/adminpanel','AdminPanelController@index')->middleware('admincheck');
Route::get('/adminpanel/showorder','AdminPanelController@viewOrder')->middleware('admincheck');


