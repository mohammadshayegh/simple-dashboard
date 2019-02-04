@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8" style="margin-top:10px;">
                <div class="card">
                    <form method="post" action="{{route('sellmobilePost')}}">
                        @csrf
                        <div class="card-header">Mobile</div>
                        <div class="card-body">
                            <div class="row">
                                <label>Id:</label>
                                <label>{{$mobile->s_id}}</label>
                                <input type="hidden" name="s_id" value="{{$mobile->s_id}}">
                            </div>
                            <div class="row">
                                <label>Model:</label>
                                <label>{{$mobile->model}}</label>
                            </div>
                            <div class="row">
                                <label>Company:</label>
                                <label>{{$mobile->company}}</label>
                            </div>
                            <div class="row">
                                <label>Price:</label>
                                <input type="text" class="form-control" name="price">
                            </div>

                            <div class="row">
                                <button type="submit" class="btn btn-primary">
                                    Buy
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
