@extends('layouts.dashboard')

@section('content')

	<hr>
	<div class="col-xs-12">
		{{Form::open(['route'=>'questions.store','role'=>'form','class'=>'form-horizontal'])}}

				        	
			<div class="form-group">
				{{Form::text('title',null,['id'=>'title' , 'class'=>'form-control', 'placeholder'=>'Enter question title'])}}
			</div>	

			<div class="form-group">
				{{Form::textarea('description',null,['id'=>'description' , 'class'=>'form-control','cols'=>'30','rows'=>'5' ,'placeholder'=>'Add some description'])}}
			</div>	
			<br>

			<div class="form-group">
				<button type="submit" class="btn btn-success btn-lg">Post Question</button>
			</div>


		{{Form::close()}}			
	</div>
@stop
