<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkillsController extends Controller
{
    public function index()
    {
        $data = ['skills' => ['Design Thinking', 'Graphic Design', 'Public Speaking', 'Writing']];
        return view('skills', $data);
    }
}
