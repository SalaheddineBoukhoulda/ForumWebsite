@extends('layouts.app')

@section('content')
            <div class="card">
                <div class="card-header">Create discussion</div>

                <div class="card-body">
                        <form action="{{route('discussions.store')}}" method="post">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label for="channel">Choose channel</label>
                                    <select name="channel_id" id="channel_id" class="form-control">
                                        @foreach($channels as $channel)
                                            <option value="{{$channel->id}}">{{$channel->title}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="content">Ask a question</label>
                                    <textarea name="content" id="content" cols="30" rows="10" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                        <div class="text-center">
                                            <button class="btn btn-success">
                                                Create discussion
                                            </button>
                                        </div>
                                </div>
                        </form>
                </div>
            </div>
@endsection
