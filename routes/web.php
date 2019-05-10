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



// Route::middleware('auth')->get('/', 'TypeController@index');
Route::get('/', function () {
    return view('webpage.home');
});
Route::get('intype', function () {
    return view('webpage.home');
});

Route::get('intype/{id}', 'IntypePageController@index');
Route::get('intype/{id}/detail', 'DetailsController@index');
Route::get('notedetail', 'DetailsController@note');
Route::get('scal', 'ScalController@index');
Route::get('scal/show', 'ScalController@show');


Auth::routes();

Route::group(['middleware' => ['auth']], function(){
    Route::get('home', function () {
        return redirect('instype');
    });
    Route::get('instype', 'TypeController@index');
    Route::post('createType', 'TypeController@create');
    Route::post('editType', 'TypeController@update');
    Route::post('deleteType', 'TypeController@delete');

    Route::get('instype/instument', 'InstrumentController@index');
    Route::get('instype/createinstument', 'InstrumentController@create');
    Route::get('instype/editinstument', 'InstrumentController@edit');
    Route::get('instype/deleteinstument', 'InstrumentController@delete');
    Route::post('instype/addinstument', 'InstrumentController@add');
    Route::post('instype/updateinstument', 'InstrumentController@update');

    Route::get('note', 'NoteController@index');
    Route::get('note/createnote', 'NoteController@create');
    Route::get('note/editnote', 'NoteController@edit');
    Route::get('note/deletenote', 'NoteController@delete');
    Route::post('note/addnote', 'NoteController@add');
    Route::post('note/updatenote', 'NoteController@update');

    Route::get('theory', 'TeachingController@index');
    Route::get('theory/show', 'TeachingController@show');
    Route::post('theory/createkey', 'TeachingController@add');
    Route::post('theory/updatekey', 'TeachingController@update');

    Route::get('test', 'TestController@index');
    Route::get('test/{id}', 'TestController@show');
    Route::get('test/{id}/create', 'TestController@create');
    Route::get('test/{id}/delete', 'TestController@dalete');
    Route::post('test/add', 'TestController@add');

});



// Route::get('/home', 'HomeController@index')->name('home');
