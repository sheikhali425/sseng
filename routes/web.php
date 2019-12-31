<?php
use Illuminate\Http\Request;
use App\Project;
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
//
Route::get('/createproject', function () {
    return view('createproject');
});
Route::post('/createproject', 'ProjectController@store');

Route::get('/', function () {
    return view('welcome');
});
Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/page/{id}', function ($id) {
    $project = Project::where('id',$id)->first();

    return view('page',compact('project'));
});
Route::get('/layout', function () {
    return view('layout');
});
Route::get('/projectss', function () {
    $projects = Project::all();


    return view('projectss',compact('projects'));
});
Route::get('/air', function () {
    return view('air');
});
Route::get('/clients', function () {
    return view('clients');
});
Route::get('/cladding', function () {
    return view('cladding');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/heater', function () {
    return view('heater');
});
Route::get('/box', function () {
    return view('box');
});
Route::get('/piping', function () {
    return view('piping');
});
Route::get('/filter', function () {
    return view('filter');
});
Route::get('/ducting', function () {
    return view('ducting');
});
Route::get('/damper', function () {
    return view('damper');
});
Route::get('/grille', function () {
    return view('grille');
});
Route::get('/insulation', function () {
    return view('insulation');
});
Route::get('/diffuser', function () {
    return view('diffuser');
});

Route::get('/product', function () {
    return view('product');
});
Route::get('/services', function () {
    return view('services');
});

Route::get('/project', function () {
    return view('project');
});
Route::get('/contact', function () {
    return view('contact');
});

