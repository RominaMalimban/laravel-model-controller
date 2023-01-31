<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movies;
class MainController extends Controller
{
    public function home() {

        $movies = Movies::all();
        var_dump($movies);
       

        return view("pages.home");
    }
}
