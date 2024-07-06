<?php

namespace App\Http\Controllers;

class AboutMeController extends Controller
{
    public function index()
    {
        $data = ['name' => 'Ryzel Erin Felizco', 
                 'age' => '21', 
                 'birthdate' => 'August 08, 2002', 
                 'location' => 'Baguio City'];

        return view('about-me', $data);
    }
}
