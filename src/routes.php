<?php
use Illuminate\Support\Facades\Route;



Route::post('fmt/mawr/store', 'EdgeWizz\Mawr\Controllers\MawrController@store')->name('fmt.mawr.store');

Route::post('fmt/mawr/update/{id}', 'EdgeWizz\Mawr\Controllers\MawrController@update')->name('fmt.mawr.update');

Route::post('fmt/mawr/csv_upload', 'EdgeWizz\Mawr\Controllers\MawrController@csv_upload')->name('fmt.mawr.csv_upload');

Route::any('fmt/mawr/inactive/{id}',  'EdgeWizz\Mawr\Controllers\MawrController@inactive')->name('fmt.mawr.inactive');

Route::any('fmt/mawr/active/{id}',  'EdgeWizz\Mawr\Controllers\MawrController@active')->name('fmt.mawr.active');