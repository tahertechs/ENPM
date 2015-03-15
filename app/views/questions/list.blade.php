@extends('layouts.dashboard')

@section('content')
  <hr>

  @foreach($questions as $question)
        <div class="well not-info">
          <div class="row">
            <div class="col-xs-6 ">
              <a href="{{URL::route('questions.show',$question->slug)}}">
                <div><h4><p>{{e($question->title)}}</p></h4></div>
                <div style="margin-bottom:10px"><p>{{Str::limit(e($question->description), $limit = 70)}}</p></div>
              </a>
            </div> 

            <div class="col-xs-6">

              <div class="col-xs-3 text-center">
                  <span class="glyphicon glyphicon-comment"></span><br/>
                  <span class="files-count">{{$question->answers->count()}} answers</span>
              </div>

              <div class="col-sm-3">
                <span class="glyphicon glyphicon-calendar"></span><br/>
                <span class="files-count">{{$question->created_at->diffForHumans()}}</span>              
              </div>
              <div class="col-sm-3">
                <a href="{{URL::route('questions.edit' , $question->id)}}">- <span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
              </div>

              <div class="col-sm-3">
                <a href="{{URL::route('questions.delete' , $question->id)}}">- <span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a> 
              </div>


            </div>
          </div> <!-- end row , not-info -->
        </div> <!-- end well --> 

  @endforeach

  <div class="text-center">
      {{$questions->links()}}     
  </div>

@stop