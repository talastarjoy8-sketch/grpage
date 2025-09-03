<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $members = [
        ['name' => 'Dixie', 'route' => 'dixie'],
        ['name' => 'Pariñas', 'route' => 'pariñas'],
        ['name' => 'Crystal', 'route' => 'crystal'],
        // add more members here
    ];

    return view('welcome', compact('members'));
});

// Example member routes (each pointing to their own blade file)
Route::view('/dixie', 'members.dixie')->name('dixie');
Route::view('/pariñas', 'members.pariñas')->name('pariñas');
Route::view('/crystal', 'members.crystal')->name('crystal');
