@extends('layouts.master')

@section('content')

    <div class="container">
        <h2>Login page</h2>
        <hr/>
        <div class="row">
            <div class="col-md-6">

                {{Form::open(['route'=>'login','role'=>'form','class'=>'form-horizonatal'])}}

                <div class="form-group">
                    {{Form::label('email','E-mail Address')}}
                    {{Form::email('email', null, ['class'=>'form-control', 'placeholder'=>'','autocomplete'=>'off'])}}
                </div>

                <div class="form-group">
                    {{Form::label('password','Password')}}
                    {{Form::password('password',['class'=>'form-control', 'placeholder'=>''])}}
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-lg btn-success">Login Now <i class="fa fa-sign-in"></i></button>
                </div>

                {{Form::close()}}


            </div>
        </div>


    </div>

@stop