<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Discussion;
use App\Channel;

class ForumController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        return view('forum',['discussions' => Discussion::orderBy('created_at','desc')->paginate(3)]);
    }

    public function channel($slug){
        return view('channels.channel',['discussions' => Channel::where('slug',$slug)->first()->discussions()->paginate(3)]);                   
    }
}
