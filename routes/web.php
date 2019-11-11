<?php
// Senaraikan pengguna di dalam pangkalan data
Route::get('users', 'UserController@paparkanSenaraiPengguna');
// Kembalikan borang untuk create pengguna baru
Route::get('users/create', 'UserController@paparkanBorang');
// Memaparkan butiran pengguna
Route::get('users/{id}', 'UserController@paparkanButiranPengguna');
