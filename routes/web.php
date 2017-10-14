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

Route::get('/', 'HomeController@home')->name('home');

Route::get('/a', function () {
    echo phpinfo();
});

Route::group(['prefix' => 'father','namespace' => 'Father'], function ($router) {
    $router->get('/uploadVideo','ShareVideoController@upload');
    $router->get('/shareVideo','ShareVideoController@show');
    $router->post('/fileupload','ShareVideoController@fileupload');
});


Route::get('/zxj/login', 'Zxj\DashBoardController@login');
/*用户端留言*/
Route::post('/zxj/leavePost', 'Zxj\Message\leaveMessageController@leavePost');

Route::group(['prefix' => 'zxj','namespace' => 'Zxj','middleware' => ['Admin']], function ($router) {
    $router->get('/dashboard','DashBoardController@dashboard');
    /*关于留言部分*/
    $router->get('/leaveMessage/notRead','Message\leaveMessageController@notRead');
    $router->get('/leaveMessage/all','Message\leaveMessageController@all');
    $router->post('/leaveMessage/all/ajax','Message\leaveMessageController@allAjax');
    $router->get('/leaveMessage/detail/{id}/{type}','Message\leaveMessageController@detail');/*type为1表示上一级为未读留言，2表示所有留言*/
});
