<?php
route::pattern('name' ,'(.*)');
route::pattern('name1' ,'(.*)');
route::pattern('id', '([0-9]*)');
route::pattern('code', '(.*)');

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

// Route::get('/', function () {
//     return view('sinhvien.index.index');
// });

Route::get('mail','MailController@index');
Route::post('postMail', 'MailController@post');

//////////////////////////
Route::namespace('SinhVien')->group( function() {
		Route::get('/',  [
			'uses' => 'IndexController@index',
			'as'   => 'sinhvien.index.index'
		]);
		Route::get('tai-khoan' , [
			'uses' => 'UserController@index',
			'as'   => 'sinhvien.user.index'
		]);

		Route::get('dang-ky' , [
			'uses' => 'UserController@getAdd',
			'as'   => 'sinhvien.user.register'
		]);

		Route::post('dang-ky' , [
			'uses' => 'UserController@postAdd',
			'as'   => 'sinhvien.user.register'
		]);

		Route::post('dang-nhap' , [
			'uses' => 'UserController@postLogin',
			'as'   => 'login',
		]);

		Route::post('cap-nhat' , [
			'uses' => 'UserController@postEdit',
			'as'   => 'edit',
		]);

		Route::post('active-member' , [
			'uses' => 'UserController@UpdateCode',
			'as'   => 'active',
		]);

		Route::get('danh-muc/{name}-{id}' , [
			'uses' => 'CatController@index',
			'as'   => 'sinhvien.cat.raovat'
		]);

		Route::get('{name1}/{name}-{id}.html' , [
			'uses' => 'DetailController@index_raovat',
			'as'   => 'sinhvien.detail.detail_raovat'
		]);
});