<?php

Route::get('/', 'SiteController@index');
Route::redirect('/veeam', '/', 301);
