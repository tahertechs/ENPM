@extends('layouts.default')

@section('styles')
    <style>
        
    .comment_section {
    margin-top: 30px;
    position: relative;
    }

    .media>.pull-left {
    margin-right: 20px;
    }

    .post_comments img {
    width: 85px;
    height: 85px;
    margin-top: 35px;
    }

    .comment_section .media-body {
    display: inherit;
    }
    .post_reply_comments {
    background: #E6E9ED;
    border-radius: 4px;
    padding: 30px;
    }

    .post_reply_comments h4 {
    color: #c4c4c5;
    font-weight: 400;
    }
      
    </style>
@stop

@section('content')

<div class="col-md-12">
        
    <div class="text-center">
        <br><mark>Make sure you have logged in to reply this question</mark><br>
    </div>
    <hr>


    <div class="not-single">        
        <div class="well" >
          <div class="row">
            <div class="col-sm-12">

              <div class="row"><div class="col-xs-4"><b>Title:</b></div>
                <div class="col-xs-8"><p>{{e($question->title)}}</p></div>  
              </div>

              <div class="row">
                <div class="col-xs-4"><b>Açıklama:</b></div>
                <div class="col-xs-8">
                  <p>{{e($question->description)}}   </p>
                </div>  
              </div>

              <div class="row">
                <div class="col-xs-4"><b>Soru Soran:</b></div>
                <div class="col-xs-8">
                  <p><a href="{{URL::route('users.show',$question->author->username)}}">{{$question->author->name}} - [{{$question->author->username}}]</a></p>
                </div>  
              </div>

              <div class="row">
                <div class="col-xs-4"><b>Sorma Tarihi:</b></div>
                <div class="col-xs-8">
                  <p>{{$question->created_at->format('d-m-Y')}} - Saat {{$question->created_at->format('H:m')}} ({{$question->created_at->diffForHumans()}})</p>
                </div>  
              </div>

            </div> <!-- end col-xs-12 -->
          </div> <!-- end row -->
          <div class="ribbon-wrapper-green">
            <a href="{{URL::route('questions.index')}}"><div class="ribbon-green">ENPM</div></a>
          </div>
      
        </div> <!-- end well -->

    </div>

    @foreach($question->answers as $answer)
        <div class="media comment_section">
            <div class="pull-left post_comments">
                @if(!empty($answer->author->photo))
                    <a href="#"><img src="{{$answer->author->photo}}" class="img-circle" alt="" /></a>                 
                @else
                    <a href="#"><img src="{{URL::asset('assets/img/thumb.png')}}" class="img-circle" alt="" /></a>
                    
                @endif            
            </div>
            <div class="media-body post_reply_comments">
                <b>{{$answer->author->name}}</b>
                <h4>{{$answer->created_at->diffForHumans()}}</h4>
                <p>{{ e($answer->answer) }}</p>
            </div>
        </div> 
    @endforeach



    
    <hr>
    <div class="text-center">
        <br><mark>Cevabini Burada yaz</mark><br>
    </div><hr>
    
    @if(Auth::check())
        <div class="col-md-12">      
            {{ Form::open(array('route' => array('answers.store', $question->id) ,'role'=>'form','class'=>'form-horizontal' ))}}

              <div class="form-group">
                {{Form::textarea('answer',null,['id'=>'summernote-disable' , 'class'=>'form-control','cols'=>'30','rows'=>'5' ,'placeholder'=>'Cevapla...'])}}
              </div>    

              <div class="form-group">
                <button type="submit" class="btn btn-success btn-lg">Cevap Gonder</button>
              </div>
            {{Form::close()}}        
        </div>

    @else
        <div class="col-md-12">      
              <div class="text-center form-group">
                <a href="{{URL::to('/')}}" class="btn btn-success btn-lg">Cevaplamak icin Giris Yapmalisin</a>   
              </div>     
        </div>
    @endif

</div> <!-- end col-md-12 -->




	<!-- Disqus Commenting starts here -->	
	<div id="disqus_thread"></div>
    <script type="text/javascript">
        /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
        var disqus_shortname = 'enpm'; // required: replace example with your forum shortname

        /* * * DON'T EDIT BELOW THIS LINE * * */
        (function() {
            var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
            dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
        })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
    
@stop
