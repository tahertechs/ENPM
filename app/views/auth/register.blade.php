@extends('layouts.master')

@section('content')

    <div class="container">
        <h2>Register page</h2>
        <hr/>
        <div class="row">
            <div class="col-md-6">

                {{Form::open(['route'=>'register','role'=>'form','class'=>'form-horizonatal'])}}

                <div class="form-group">
                    {{Form::label('name','Full Name')}}
                    {{Form::text('name', null, ['class'=>'form-control', 'placeholder'=>''])}}
                </div>

                <div class="form-group">
                    {{Form::label('username','Username')}}
                    {{Form::text('username', null, ['class'=>'form-control', 'placeholder'=>''])}}
                </div>

                <div class="form-group">
                    {{Form::label('password','Password')}}
                    {{Form::password('password',['class'=>'form-control', 'placeholder'=>''])}}
                </div>

                <div class="form-group">
                    {{Form::label('password_confirmation','Password Again')}}
                    {{Form::password('password_confirmation',['class'=>'form-control', 'placeholder'=>''])}}
                </div>

                <div class="form-group">
                    {{Form::label('email','E-mail Address')}}
                    {{Form::email('email', null, ['class'=>'form-control', 'placeholder'=>''])}}
                </div>

                <div class="form-group">
                    {{Form::submit('Create Account',['class'=>'btn btn-lg btn-success'])}}
                </div>

                {{Form::close()}}


            </div>
        </div>


    </div>

@stop