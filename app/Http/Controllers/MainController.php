<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movies;
class MainController extends Controller
{
    public function home() {

        $movies = Movies::all();

        $data = [
            "movies" => $movies
        ];
       

        return view("pages.home", $data);
    }
}
