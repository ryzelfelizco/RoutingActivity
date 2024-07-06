<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HobbiesController extends Controller
{
    public function index()
    {
        $data = ['hobbies' => ['Writing', 'Song Writing', 'Singing', 'Performing']];
        return view('hobbies', $data);
    }
}
