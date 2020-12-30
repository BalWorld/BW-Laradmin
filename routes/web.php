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

Route::get('/', function () {
    return view('main/home');
});

Route::get('/dashboard','DashboardController@index')->middleware('auth');


Route::get('/jobs','JobController@index')->middleware('auth');
Route::get('/jobs/{id}','JobController@show')->middleware('auth');
Route::post('/jobs','JobController@store')->middleware('auth');
Route::delete('/job/delete/{id}','JobController@destroy')->name('job.delete')->middleware('auth');

Route::get('/add', function () {
    return view('bw_jobs_add');
})->middleware('auth');

Route::get('/responses','JobResponseController@index')->middleware('auth');
Route::get('/response','JobResponseController@upload')->middleware('auth');
Route::post('/response/edit/{id}','JobResponseController@update')->name('response.edit')->middleware('auth');
Route::delete('/response/delete/{id}','JobResponseController@destroy')->name('response.delete')->middleware('auth');
Route::post('/response','JobResponseController@store')->name('uploadresume')->middleware('auth');
Route::get('/responses/download/{id}','JobResponseController@show')->name('downloadresume')->middleware('auth');


//Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('login/{provider}', 'AuthController@redirectToProvider');
Route::get('{provider}/callback', 'AuthController@handleProviderCallback');

//MainWebsite
Route::view('/about-us', 'main/about-us');
Route::view('/ai-ml', 'main/ai-ml');
Route::view('/alexa-skill', 'main/alexa-skill');
Route::view('/big-data-migration', 'main/big-data-migration');
Route::view('/clients-and-partners', 'main/clients-and-partners');
Route::view('/cloud-computing', 'main/cloud-computing');
Route::view('/contact', 'main/contact');
Route::view('/devops', 'main/devops');
Route::view('/etl', 'main/etl');
Route::view('/full-stack-development', 'main/full-stack-development');
Route::view('/home', 'main/home');
Route::view('/homebotix', 'main/homebotix');
Route::view('/internet-of-things', 'main/internet-of-things');
Route::view('/lambda', 'main/lambda');
Route::view('/leadership', 'main/leadership');
Route::view('/our-alexa-skills', 'main/our-alexa-skills');
Route::view('/php', 'main/php');
Route::view('/privacy-policy', 'main/privacy-policy');
Route::view('/robotic-process-automation', 'main/robotic-process-automation');
Route::view('/sitemap', 'main/sitemap');
Route::view('/solutions', 'main/solutions');
Route::view('/temenos', 'main/temenos');
Route::view('/terms-and-conditions', 'main/terms-and-conditions');
Route::view('/testing-as-a-services', 'main/testing-as-a-services');
Route::view('/v-pulse', 'main/v-pulse');


Route::get('/careers','JobController@career');

Route::get('/careers/{id}-{slug}','JobController@showCareer');

Route::post('/applyjob','JobResponseController@apply')->name('applyjob');
