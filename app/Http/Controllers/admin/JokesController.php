<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Joke;
use App\Category;

class JokesController extends Controller
{
    public function data(){

        $jokes = Joke::all();
        $categories = Category::all();

        $data = array(
            'jokes'  => $jokes,
            'categories'  => $categories
        );
        return $data;
    }

    public function index()
    {
        $jokes = Joke::orderBy('status','asc')->paginate(10);
        $categories = Category::all();

        $data = array(
            'jokes'  => $jokes,
            'categories'  => $categories
        );

        return view('admin/jokes')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $joke = Joke::find($id);
        $joke->category()->detach();
        Joke::destroy($id);

        return redirect()->action('admin\DashboardController@index')->with($this->data());

    }
}
