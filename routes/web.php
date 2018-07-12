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


Route::get('/{provider}/auth',[
    'uses' => 'SocialAuthController@auth',
    'as' => 'social.auth'
]);

Route::get('/{provider}/redirect',[
    'uses' => 'SocialAuthController@authCallback',
    'as' => 'social.callback'
]);

Auth::routes();

Route::get('/forum', 'ForumController@index')->name('home');


Route::group(['middleware' => 'auth'],function(){
    Route::resource('channels','ChannelsController');
    Route::get('/discussions/create',[
        'uses' => 'DiscussionsController@create',
        'as' => 'discussions.create'
    ]);


    Route::post('/discussions/store',[
        'uses' => 'DiscussionsController@store',
        'as' => 'discussions.store'
    ]);


    Route::get('/discussions/{slug}',[
        'uses' => 'DiscussionsController@show',
        'as' => 'discussion'
    ]);
});
