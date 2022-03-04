<?php

namespace App\Http\Controllers;

use App\MovieModel;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index() {
        $data = MovieModel::all();
        dump($data);
        return view('home', compact("data"));
     }

}
