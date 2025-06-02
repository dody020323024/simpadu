<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController
{
    public function index()
    {

        $data = [
            'nama' => 'Dody Putra Ramadhan',
            'foto' => 'wong ganteng.jpg'
        ];
        return view('dashboard', compact('data'));
    }
}
