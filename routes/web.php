<?php

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
    return view('welcome')->with('imgs', \App\Images::all())
        ->with('main_img', \App\MainImage::find(1))
        ->with('about', \App\About::find(1))
        ->with('main_text', \App\MainText::find(1));
});

$this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
$this->post('login', 'Auth\LoginController@login');
$this->post('logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/add/port-image', 'HomeController@add_img')->name('add.img');
Route::post('/add/port-image/delete', 'HomeController@add_img_delete')->name('port.img.delete');
Route::get('/add/main-img', 'HomeController@main_img')->name('main.img');
Route::post('/add/main-img/post', 'HomeController@main_img_post')->name('main.img.post');

Route::get('/about_us', "HomeController@about")->name('about');
Route::post('/about_us/post', "HomeController@about_post")->name('about.post');

Route::get('/main', "HomeController@main")->name('main.text');
Route::post('/main/post', "HomeController@main_post")->name('main.text.post');
