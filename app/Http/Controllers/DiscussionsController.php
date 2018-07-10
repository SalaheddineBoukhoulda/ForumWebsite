<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DiscussionsController extends Controller
{
    public function create(){
        return view('discussions.create');
    }


    public function store(Request $request){
        dd($request);
    }
}
