<?php

Route::group(['namespace' => 'Infinitexyz123\Cocacola\Http\Controllers'],function(){
	Route::get('/infinite/cocacola', 'CocacolaController@index');
	Route::post('/infinite/cocacola', 'CocacolaController@akheriPasta')->name('cocacola.post');
});
