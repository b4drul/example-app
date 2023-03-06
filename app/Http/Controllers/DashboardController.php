<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {

        $name = str()->upper('Badrul Amin');
        $occupation = 'Programmer';


        return view('name', [
            'name' => $name,
            'occupation' => $occupation
        ]);
    }
}
