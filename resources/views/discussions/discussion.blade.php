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
                Like
        </div>
</div>
@endforeach
@endsection
