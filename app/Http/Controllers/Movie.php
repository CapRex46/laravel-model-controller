<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class Movie extends Controller
{
    public function index() {
        $data = Movie::all();
        dump($data);
        return view('home', compact("data"));
     }

}
