<?php

Route::any('/painel/produtos/pesquisar', 'Painel\ProdutoController@search')->name('produtos.search');
Route::resource('/painel/produtos', 'Painel\ProdutoController');


Route::group(['namespace' => 'Site'], function() {
    Route::get('/categoria/{id}', 'SiteController@categoria');
    Route::get('/categoria2/{id?}', 'SiteController@categoriaOp');

    Route::get('/contato', 'SiteController@contato');
    Route::get('/', 'SiteController@index');
});
