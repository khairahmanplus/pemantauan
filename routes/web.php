<?php
Route::get('/', function () {});
// Senaraikan pengguna di dalam pangkalan data
Route::get('users', function () {
    // Dapatkan dari database
    $users = [
        'Ali',
        'Abu',
        null
    ];
    // Kembalikan view bersama dengan variable
    return view('users.index', ['users' => $users]);
});
// Kembalikan borang untuk create pengguna baru
Route::get('users/create', function () {
    return view('users.create');
});
// Memaparkan butiran pengguna
Route::get('users/{id}', function () {});
