@extends('layouts.dashboard')


@section('content')

	<hr>
	{{ Form::open(array('route' => array('questions.update', $question->id),'method'=>'PATCH' ,'role'=>'form','class'=>'form-horizontal' ))}}

		<div class="form-group">
			{{Form::text('title',$question->title,['class'=>'form-control', 'placeholder'=>'Enter question title'])}}
			{{Form::hidden('id', $question->id)}}
		</div>

		<div class="form-group">
			{{Form::textarea('description',$question->description,['id'=>'summernote-disable' , 'class'=>'form-control','cols'=>'30','rows'=>'5' ,'placeholder'=>'Add some description'])}}
		</div>		

		<div class="form-group">
			<button type="submit" class="btn btn-success btn-lg">Update Question</button>
		</div>
	{{Form::close()}}	

@stop

