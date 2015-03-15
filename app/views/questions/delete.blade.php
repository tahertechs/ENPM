@extends('layouts.dashboard')

@section('content')

		<div class="form-group">
			{{Form::open(['route'=>['questions.destroy' , $question->id] , 'method'=>'delete'])}}
				<button class="btn btn-danger btn-lg">YES , DELETE IT</button>
				<a href="{{URL::route('questions.index')}}" class="btn btn-default btn-lg" >NO , JUST KIDDING</a>
			{{Form::close()}}
			
		</div>	

@stop

