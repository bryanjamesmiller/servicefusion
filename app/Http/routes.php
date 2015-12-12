<?php

Route::get('/', function () {
    return view('records.create');
});

Route::resource('records', 'RecordsController');
