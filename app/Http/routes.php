<?php

Route::get('/', function () {
	return view('welcome');
});

Route::group(['middleware' => 'auth'], function () {

	/**
	 * Produtos
	 */
	Route::group(['prefix' => 'produtos', 'as' => 'product.'], function () {

		Route::get('', ['as' => 'index', 'uses' => 'ProductController@index']);
		Route::get('novo', ['as' => 'create', 'uses' => 'ProductController@create']);
		Route::post('incluir/{id}', ['as' => 'store', 'uses' => 'ProductController@store']);
		Route::get('editar/{id}', ['as' => 'edit', 'uses' => 'ProductController@edit']);
		Route::post('atualizar/{id}', ['as' => 'update', 'uses' => 'ProductController@update']);
		Route::get('excluir/{id}', ['as' => 'destroy', 'uses' => 'ProductController@destroy']);

	});

	

});