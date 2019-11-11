<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function paparkanSenaraiPengguna()
    {
        // Dapatkan dari database
        $users = [
            'Ali',
            'Abu',
            null
        ];
        // Kembalikan view bersama dengan variable
        return view('users.index', ['users' => $users]);
    }

    public function paparkanBorang()
    {
        return view('users.create');
    }

    public function paparkanButiranPengguna($id)
    {
        return $id;
    }
}
