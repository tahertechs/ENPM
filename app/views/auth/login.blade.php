@extends('layouts.master')

@section('content')

    <div class="container">
        <h2>Login page</h2>
        <hr/>
        <div class="row">
            <div class="col-md-6">

                @if ($errors->has())
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            {{ $error }}<br>
                        @endforeach
                    </div>
                @endif

                @if(Session::has('message'))
                    <div class="alert alert-success"> {{ Session::get('message') }} </div>
                @endif

                {{Form::open(['route'=>'login','role'=>'form','class'=>'form-horizonatal'])}}

                <div class="form-group">
                    {{Form::label('username_or_email','Username or Email Address')}}
                    {{Form::text('username_or_email', null, ['class'=>'form-control', 'placeholder'=>'','autocomplete'=>'off'])}}
                </div>

                <div class="form-group">
                    {{Form::label('password','Password')}}
                    {{Form::password('password',['class'=>'form-control', 'placeholder'=>''])}}
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-lg btn-success">Login Now <i class="fa fa-sign-in"></i></button>
                    <a href="{{URL::route('register')}}" class="btn btn-lg btn-info"> Register</a>
                </div>

                {{Form::close()}}


            </div>
        </div>
    </div>

@stop