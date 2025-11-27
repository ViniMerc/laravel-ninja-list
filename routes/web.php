<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ninjas', function () {
    $ninjas = [
        [
            "name" => "mario",
            "skill" => 34,
            "id" => "1"
        ],
        [
            "name" => "luigi",
            "skill" => 65,
            "id" => "2"
        ],
    ];
    return view('ninjas.index', ["ninjas" => $ninjas]);
});


Route::get('/ninjas/create', function () {
    return view('ninjas.create');
});


Route::get('/ninjas/{id}', function ($id) {
    return view('ninjas.show', ["id" => $id]);
});