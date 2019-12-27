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
    return view('welcome');
});

Route::get('/succ', function () {
        $a=$_GET['test_id'];
        $b=$_GET['test_n'];
        //$sect=$_POST['section'];
    return view('succ')->with('a',$a)->with('b',$b);
});

Route::get('/test_display','TestsController@index');
Route::post('/test_display1','TestsController@store');
Route::get('/test_view','TestsController@display');
Route::get('/add_question','TestsController@question');

Route::post('/add_question_qual','TestsController@qual_store');
Route::post('/add_question_analy','TestsController@analy_store');
Route::post('/add_question_creat','TestsController@creat_store');
Route::post('/add_question_comp','TestsController@comp_store');

Route::any('/edit_qual_question','TestsController@qual_edit');
Route::put('/update_qual_question','TestsController@qual_update');
Route::any('/edit_analy_question','TestsController@analy_edit');
Route::put('/update_analy_question','TestsController@analy_update');
Route::any('/edit_creat_question','TestsController@creat_edit');
Route::put('/update_creat_question','TestsController@creat_update');
Route::any('/edit_comp_question','TestsController@comp_edit');
Route::put('/update_comp_question','TestsController@comp_update');

Route::get('/qual_delete','TestsController@qual_delete');
Route::get('/analy_delete','TestsController@analy_delete');
Route::get('/creat_delete','TestsController@creat_delete');
Route::get('/comp_delete','TestsController@comp_delete');