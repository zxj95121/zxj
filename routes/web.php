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

/*Jing*/
Route::get('/jing', 'JingController@jing');
Route::post('/jing/getNum', 'JingController@getNum');
Route::post('/jing/getData', 'JingController@getData');
Route::get('/jing/downloadTxt/{file}', 'JingController@downloadTxt');

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
Route::post('/zxj/leavePost', 'Zxj\Message\LeaveMessageController@leavePost');

Route::group(['prefix' => 'zxj','namespace' => 'Zxj','middleware' => ['Admin']], function ($router) {
    $router->get('/dashboard','DashBoardController@dashboard');
    /*关于留言部分*/
    $router->get('/leaveMessage/notRead','Message\LeaveMessageController@notRead');
    $router->get('/leaveMessage/all','Message\LeaveMessageController@all');
    $router->post('/leaveMessage/all/ajax','Message\LeaveMessageController@allAjax');
    $router->get('/leaveMessage/detail/{id}/{type}','Message\LeaveMessageController@detail');/*type为1表示上一级为未读留言，2表示所有留言*/
});

/*-------------------api-----------------pro---------------------*/
Route::group(['prefix' => 'pro', 'namespace' => 'Pro'], function($router) {
	/*wx.login*/
	$router->get('/login/getkey', 'LoginController@getkey');

	$router->post('/chat/getGroup', 'ChatController@getGroup');//获取所有群聊
	$router->post('/chat/checkMember', 'ChatController@checkMember');
	$router->post('/chat/newWechatUser', 'ChatController@newWechatUser');
	$router->post('/chat/isInGroup', 'ChatController@isInGroup');//查找该用户是否已加入群聊或者是否为异性
	$router->post('/chat/joinGroup', 'ChatController@joinGroup');//用户同意加入群聊
	$router->post('/chat/regetInfo', 'ChatController@regetInfo');//重新获取用户身份，并返回判断信息
});
