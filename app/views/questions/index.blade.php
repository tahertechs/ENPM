@extends('layouts.default')


@section('content')
  
  <hr>
  <div class="row">
     <div class="col-xs-4 pull-right">
      <a href="{{URL::route('questions.create')}}" style="width:100%" class="btn btn-default">Soru Ekle</a>
    </div>   
  </div>
  <hr>

  <div class="not-list-scroll">    

    @foreach($questions as $question)

        <div class="well not-info">
            <div class="row">
                <div class="col-xs-8 ">
                    <a href="{{URL::route('questions.show',$question->slug)}}"> 
                        <div><h4><b>{{e($question->title)}}</b></h4></div>
                        <!-- <div style="margin-bottom:10px"><b>{{Str::limit($question->description, $limit = 60)}}</b></div> -->
                        <small><a href="{{URL::route('users.show',$question->author->username)}}">By : {{$question->author->username}}</a></small>
                    </a>
                </div> 

                <div class="col-xs-2 text-center">
                    <span class="glyphicon glyphicon-comment"></span><br/>
                    <span class="files-count">{{$question->answers->count()}} answers</span>
                </div>

                <div class="col-xs-2 text-center">
                    <span class="glyphicon glyphicon-calendar"></span><br/>
                    <span class="files-count">{{$question->created_at->diffForHumans()}}</span>
                </div>
            </div> 
        </div>

  @endforeach

  <div class="text-center">
      {{$questions->links()}}     
  </div>

  </div>

@stop
