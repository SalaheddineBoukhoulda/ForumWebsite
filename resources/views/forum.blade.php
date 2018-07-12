@extends('layouts.app')

@section('content')
            @foreach($discussions as $discussion)
            <div class="card">
                <div class="card-header">
                    <img src="{{asset($discussion->user->avatar)}}" alt="{{$discussion->title}}" width="70px" height="70px">
                </div>
                <div class="card-body">
                    {{$discussion->content}}
                </div>
            </div>
            @endforeach
            <br>
            <br>
            <div class="text-center">
                {{$discussions->links()}}
            </div>
@endsection
