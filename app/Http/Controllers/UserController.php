<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function index()
    {
        $users = [
            [
                'id' => 1,
                'username' => 'admin',
                'full_name' => 'Administrator'
            ],
            [
                'id' => 2,
                'username' => 'juan123',
                'full_name' => 'Juan Dela Cruz'
            ],
            [
                'id' => 3,
                'username' => 'maria456',
                'full_name' => 'Maria Santos'
            ],
            [
                'id' => 4,
                'username' => 'pedro789',
                'full_name' => 'Pedro Reyes'
            ],
            [
                'id' => 5,
                'username' => 'ana101',
                'full_name' => 'Ana Garcia'
            ]
        ];

        return view('users', compact('users'));
    }
}
