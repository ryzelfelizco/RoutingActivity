<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutMeController extends Controller
{
    public function index()
    {
        $data = ['name' => 'Ryzel Erin Felizco', 'age' => '21', 'birthdate' => 'August 08, 2002', 'Location' => 'Baguio City'];
        return view('about-me', $data);
    }
}
