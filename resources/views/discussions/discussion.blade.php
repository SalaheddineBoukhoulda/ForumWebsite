@extends('layouts.app')

@section('content')
<div class="card">
        <div class="card-header">
            <img src="{{asset($discussion->user->avatar)}}" alt="{{$discussion->title}}" width="40px" height="40px">
            &nbsp;&nbsp;
            <span>{{$discussion->user->name}}</span>
        </div>
        <div class="card-body">
            <div class="text-center">
                  <h4><b>{{$discussion->title}}</b></h4>
            </div>
            <hr>
            {{$discussion->content}}
        </div>
        <div class="card-footer">
            {{$discussion->replies->count()}} Replies
        </div>
</div>
<br>
<br>
@foreach($discussion->replies as $reply)
<div class="card">
        <div class="card-header">
                <img src="{{asset($reply->user->avatar)}}" alt="{{$reply->user->name}}" width="40px" height="40px">
                &nbsp;&nbsp;
                <span>{{$reply->user->name}}</span>
        </div>
        <div class="card-body">
                {{$reply->content}}
        </div>
        <div class="card-footer">
                @if($reply->isLikedByUser())
                        <a href="{{route('reply.unlike',['id'=>$reply->id])}}" class="btn btn-danger pull-left">Unlike</a>
                @else
                        <a href="{{route('reply.like',['id'=>$reply->id])}}" class="btn btn-info pull-left">Like</a>
                @endif
        </div>
</div>
<br>
@endforeach
<br>
<br>
<form action="{{route('discussions.reply',['id' => $discussion->id])}}" method="post">
        {{csrf_field()}}
        <div class="form-group">
                <label for="content">Leave a reply</label>
                <textarea name="content" id="content" cols="30" rows="10" class="form-control">

                </textarea>
        </div>
        <div class="form-group">
                <div class="text-right">
                        <button class="btn btn-info">
                            Reply
                        </button>
                </div>
        </div>
</form>
@endsection
