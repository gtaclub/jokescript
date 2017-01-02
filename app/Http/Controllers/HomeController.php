<?php

namespace App\Http\Controllers;

use App\Joke as Joke;
use App\Category as Category;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::all();
        $jokes = Joke::orderBy('created_at','desc')->paginate(10);
        return view('home')->with('category', $category)->with('jokes', $jokes);
    }
}
