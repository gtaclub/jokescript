<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Joke as Joke;
use App\Category as Category;
use Carbon\Carbon;


class SubmitController extends Controller
{
    public function submit(Request $request){

        $current_time = Carbon::now()->toDayDateTimeString();

            $joke = Joke::create([
                'content' => $request['content'],
                'created_at' => $current_time,
                'updated_at' => $current_time
            ]);
            $joke->category()->attach($request['category']);
            return redirect('/');



    }
}
