<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $users = [
            [
                'name' => 'Tibi',
                'age' => 38,
            ],
            [
                'name' => 'Filip',
                "age" => 8,
            ]
            ];

        return view('dashboard.index', ['users' => $users]);
    }
}
