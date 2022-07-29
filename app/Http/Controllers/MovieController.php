<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
    function index() {

        $data = Movie::all();

        dump($data);
        
        return view('films.index', [
            "films" => $data
        ]);
    }
}
