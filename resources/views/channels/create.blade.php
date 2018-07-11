@extends('layouts.app')

@section('content')
            <div class="card">
                <div class="card-header">Create Channel</div>

                <div class="card-body">
                    <form action="{{route('channels.store')}}" method="post">
                        {{csrf_field()}}
                        <div class="form-group">
                            <input type="text" name="channel" class="form-control">
                        </div>
                        <div class="form-group">
                            <div class="text-center">
                                <button class="btn btn-info btn-lg">
                                    Create channel
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
@endsection
