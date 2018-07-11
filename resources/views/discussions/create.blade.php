@extends('layouts.app')

@section('content')
            <div class="card">
                <div class="card-header">Create discussion</div>

                <div class="card-body">
                        <form action="{{route('discussions.store')}}" method="post">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control" name="title">
                                </div>
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
                                        <div class="text-right">
                                            <button class="btn btn-lg btn-info">
                                                Create discussion
                                            </button>
                                        </div>
                                </div>
                        </form>
                </div>
            </div>
@endsection
