@extends('layouts.admin')

@section('content')


	@foreach($posts as $post)
        <div class="well not-info">
          <div class="row">
            <div class="col-xs-12 col-md-4 ">
              <a href="{{URL::route('posts.show',$post->slug)}}">
                <div><h4><p>{{$post->title}}</p></h4></div>
                <div style="margin-bottom:10px"><p>{{Str::limit($post->description, $limit = 70)}}</p></div>
              </a>
            </div> 
            <div class="col-xs-9 col-md-4 text-center">
              <div class="col-xs-3"><p>{{$post->uploads->count()}}<br/>Dosya</p></div>
              <div class="col-xs-3">
                <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span><br/>
                <span class="files-count">{{$post->viewcount}} </span>
              </div>
              <div class="col-xs-3">
                <span class="glyphicon glyphicon-save" aria-hidden="true"></span><br/>
                <span class="files-count">{{$post->dcount}} </span>
              </div>
              <div class="col-xs-3">
                <span class="glyphicon glyphicon-heart" aria-hidden="true"></span><br/>
                <span class="files-count">123</span>
              </div>
            </div> <!-- end col-xs-6 -->
            <div class="col-xs-3 col-md-4 text-center">
              <div class="col-sm-6">
                <span class="glyphicon glyphicon-calendar"></span><br/>
                <span class="files-count">{{$post->created_at->diffForHumans()}}</span>              
              </div>
              <div class="col-sm-6">
                <a href="{{URL::route('admin.posts.edit' , $post->id)}}">- <span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
                <a href="{{URL::route('admin.posts.delete' , $post->id)}}">- <span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
              </div>


            </div>
          </div> <!-- end row , not-info -->
        </div> <!-- end well --> 

	@endforeach

	<div class="text-center">
  	  {{$posts->links()}} 		
	</div>

	
@stop
		