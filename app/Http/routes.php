<?php

Route::get('/', function () {
    return view('create');
});

Route::resource('records', 'RecordsController');
