<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Discussion;
use App\Reply;
use Session;
use Auth;

class DiscussionsController extends Controller
{
    public function create(){
        return view('discussions.create');
    }


    public function store(Request $request){
        $this->validate($request,[
            'title' => 'required',
            'channel_id' => 'required',
            'content' => 'required'
        ]);
        
        $discussion = Discussion::create([
            'user_id' => Auth::id(),
            'channel_id' => $request->channel_id,
            'title' => $request->title,
            'content' => $request->content,
            'slug' => str_slug($request->title)
        ]);


        Session::flash('success','Discussion created');
        return redirect()->route('discussion',['slug' => $discussion->slug]);
    }


    public function show($slug){
        return view('discussions.discussion')->with('discussion',Discussion::where('slug',$slug)->first());
    }


    public function reply(Request $request,$id){
        $discussion = Discussion::find($id);
        $this->validate($request,[
            'content' => 'required'
        ]);
        Reply::create([
            'user_id' => $discussion->user->id,
            'discussion_id' => $discussion->id,
            'content' => $request->content
        ]);

        return redirect()->back();
    }
}
