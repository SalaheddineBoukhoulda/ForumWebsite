@extends('layouts.app')

@section('content')
            @foreach($discussions as $discussion)
            <div class="card">
                <div class="card-header">
                    <img src="{{asset($discussion->user->avatar)}}" alt="{{$discussion->title}}" width="40px" height="40px">
                    &nbsp;&nbsp;
                    <span>{{$discussion->user->name}}</span>
                    <a href="{{route('discussion',['slug'=>$discussion->slug])}}" class="btn btn-default pull-right">View</a>
                </div>
                <div class="card-body">
                    <div class="text-center">
                          <h4><b>{{$discussion->title}}</b></h4>
                    </div>
                    {{str_limit($discussion->content,'300')}}
                </div>
                <div class="card-footer">
                    {{$discussion->replies->count()}} Replies
                </div>
            </div>
            <br>
            @endforeach
            <br>
            <br>
            <div class="text-center">
                {{$discussions->links()}}
            </div>
@endsection
