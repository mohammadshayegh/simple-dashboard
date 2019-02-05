@extends('layouts.app')

@section('content')


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <form method="post" action="{{route('editmobilePost')}}">
                        @csrf

                        <div class="form-group row">
                            <label for="s_id" class="col-md-4 col-form-label text-md-right">Serial Number:</label>
                            <label for="s_id" class="col-md-4 col-form-label text-md-right">{{$mobile->s_id}}</label>
                            <input type="hidden" name="s_id" value="{{$mobile->s_id}}">
                        </div>


                        <div class="form-group row">
                            <label for="model" class="col-md-4 col-form-label text-md-right">Model:</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" id="model" name="model" value="{{$mobile->model}}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="company" class="col-md-4 col-form-label text-md-right">Company:</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" id="company" name="company" value="{{$mobile->company}}">
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Update
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection
