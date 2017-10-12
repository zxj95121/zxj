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

Route::group(['prefix' => 'algorithm','namespace' => 'Algorithm'], function ($router) {
    $router->get('/','AlgorIndexController@index');//php首页，即题库页
    $router->get('/login','AlgorIndexController@login');//php登录页
    $router->get('/question/{id}','AlgorIndexController@question');//题目详情页
});


Route::get('/zxj/login', 'Zxj\DashBoardController@login');
/*用户端留言*/
Route::post('/zxj/leavePost', 'Zxj\Message\leaveMessageController@leavePost');

Route::group(['prefix' => 'zxj','namespace' => 'Zxj','middleware' => ['Admin']], function ($router) {
    $router->get('/dashboard','DashBoardController@dashboard');
    /*关于留言部分*/
    $router->get('/leaveMessage/notRead','Message\leaveMessageController@notRead');
    $router->get('/leaveMessage/all','Message\leaveMessageController@all');
});
