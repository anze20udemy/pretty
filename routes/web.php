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
    return view('home');
});



Route::get('/storitve', 'ServicesController@storitve');
Route::get('/storitve/masaza', 'ServicesController@masaza');
Route::get('/storitve/barvanje', 'ServicesController@barvanje');
Route::get('/storitve/strizenje', 'ServicesController@strizenje');
Route::get('/storitve/kodranje', 'ServicesController@kodranje');
Route::get('/storitve/slavnostne', 'ServicesController@slavnostne');



Route::get('/slike', 'AdminMediasController@photos');

Route::resource('mnenja', 'CommentController', ['names'=>[


    'store'=>'comment.store',



]] );

Route::resource('admin/comments', 'AdminCommentsController', ['names'=>[

    'create'=>'admin.comments.create',
    'store'=>'admin.comments.store',



]] );
Route::resource('thumbnail', 'ThumbnailController');



Route::group(['middleware'=>'guest'], function (){



} );


Route::get('/kontakt', function () {
    return view('kontakt');
});

Route::get('/logout', 'Auth\LoginController@logout');

Auth::routes();

//Route::get('auth/{driver}', ['as' => 'socialAuth', 'uses' => 'Auth\SocialController@redirectToProvider']);
//Route::get('auth/{driver}/callback', ['as' => 'socialAuthCallback', 'uses' => 'Auth\SocialController@handleProviderCallback']);

Route::get('auth/{provider}', 'Auth\AuthController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\AuthController@handleProviderCallback');



//Route::get('/', 'HomeController@index')->name('home');

Route::get('contactus-us', 'ContactUSController@contactUS');
Route::post('contactus-us', ['as'=>'contactus.store','uses'=>'ContactUSController@contactUSPost']);

Route::group(['middleware'=>'admin'], function (){

    Route::get('/admin', function (){

        if(Auth::check()){

            if(Auth::user()->isAdmin()){

        return view('admin.index');}}

        else {

          return  redirect('home');
        }

    } );

    Route::get('/admin', 'AdminPageController@index');


    Route::resource('admin/users','AdminUsersController', ['names'=>[

        'index'=>'admin.users.index',
        'create'=>'admin.users.create',
        'store'=>'admin.users.store',
        'edit'=>'admin.users.edit'
    ]] );



    Route::resource('admin/media', 'AdminMediasController', ['names'=>[

        'index'=>'admin.media.index',
        'create'=>'admin.media.create',
        'store'=>'admin.media.store',
        'show'=>'admin.media.show',
        'edit'=>'admin.media.edit'
    ]] );

    Route::resource('admin/categories', 'AdminCategoriesController', ['names'=>[

        'index'=>'admin.categories.index',
        'create'=>'admin.categories.create',
        'store'=>'admin.categories.store',
        'update'=>'admin.categories.update',
        'edit'=>'admin.categories.edit'

    ]] );

    Route::resource('admin/comments', 'AdminCommentsController', ['names'=>[

        'index'=>'admin.comments.index'


    ]] );

    Route::resource('admin/contactus','ContactUSController', ['names'=>[

        'index'=>'admin.contactus.index',
        'create'=>'admin.contactus.create',
        'store'=>'admin.contactus.store',
        'edit'=>'admin.contactus.edit'
    ]] );

});