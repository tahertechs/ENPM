@extends('layouts.master')

@section('content')

    <div class="container">
        <h2>Register page</h2>
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


                {{Form::open(['route'=>'register','role'=>'form','class'=>'form-horizonatal'])}}

                <div class="form-group  @if ($errors->has('name')) has-error @endif ">
                    {{Form::label('name','Full Name')}}
                    {{Form::text('name', null, ['class'=>'form-control', 'placeholder'=>''])}}
                </div>

                <div class="form-group  @if ($errors->has('username')) has-error @endif">
                    {{Form::label('username','Username')}}
                    {{Form::text('username', null, ['class'=>'form-control', 'placeholder'=>''])}}
                </div>

                <div class="form-group  @if ($errors->has('email')) has-error @endif">
                    {{Form::label('email','E-mail Address')}}
                    {{Form::email('email', null, ['class'=>'form-control', 'placeholder'=>''])}}
                </div>

                <div class="form-group  @if ($errors->has('password')) has-error @endif">
                    {{Form::label('password','Password')}}
                    {{Form::password('password',['class'=>'form-control', 'placeholder'=>''])}}
                </div>

                <div class="form-group  @if ($errors->has('password_confirmation')) has-error @endif">
                    {{Form::label('password_confirmation','Password Again')}}
                    {{Form::password('password_confirmation',['class'=>'form-control', 'placeholder'=>''])}}
                </div>

                <div class="form-group">
                    {{Form::submit('Create Account',['class'=>'btn btn-lg btn-success'])}}
                    <a href="{{URL::route('login')}}" class="btn btn-lg btn-info"> Login <i class="fa fa-sign-in"></i></a>
                </div>

                {{Form::close()}}


            </div>
        </div>


    </div>

@stop