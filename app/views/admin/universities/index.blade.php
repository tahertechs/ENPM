@extends('layouts.admin')

@section('content')

    <hr>
    <div class="row">
        <div class="col-xs-4 pull-right">
            <a data-toggle="modal" href="#myModal" style="width:100%" class="btn btn-default">Universiteyi Ekle</a>
        </div>   
    </div>
    <hr>


    <div class="container">
        <div class="row">      
            <div class="col-md-12">
                <h4>List of All Registered Universities</h4>
                <div class="table-responsive">
                    <table id="mytable" class="table table-bordred table-striped">                 
                        <thead>
                            <th>University Name</th>
                            <th>Faculties</th>
                            <th>Added Date</th>
                            <th>View</th> 
                            <th>Edit</th> 
                            <th>Delete</th>
                        </thead>
                        <tbody>  
                            @foreach($universities as $university)
                                <tr>
                                    <td>{{$university->name}}</td>
                                    <td>{{$university->faculties->count()}}</td>
                                    <td>{{$university->created_at->diffForHumans()}}</td>                                    
                                    <td>
                                        <a href="{{URL::route('admin.universities.show',$university->slug)}}">
                                            <p data-placement="top" data-toggle="tooltip" title="View">
                                                <button class="btn btn-primary btn-xs" data-title="View">
                                                    <span class="glyphicon glyphicon-send"></span>
                                                </button>
                                            </p>
                                        </a>
                                    </td>
                                    <td>
                                        <p data-placement="top" data-toggle="tooltip" title="Edit" class="{{$university->id}}">
                                            <button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" >
                                                <span class="glyphicon glyphicon-pencil"></span>
                                            </button>
                                        </p>
                                    </td>
                                    <td>
                                        <p data-placement="top" data-toggle="tooltip" title="Delete">
                                            <button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" >
                                                <span class="glyphicon glyphicon-trash"></span>
                                            </button>
                                        </p>
                                    </td>
                                </tr>
                            @endforeach
            
                        </tbody>                
                    </table>
                    <div class="clearfix"></div> 
                    <div class="text-center">
                        {{$universities->links()}}     
                    </div>

                </div>         
            </div>
        </div>
    </div>




    <!-- Model window for Universiteyi Ekle starts here -->
    {{Form::open(['route'=>'admin.universities.store','role'=>'form','class'=>'form-horizontal'])}}
        <div class="modal" id="myModal">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                  <h4 class="modal-title">Add New University</h4>
                </div>
                <div class="modal-body">
                
                
                {{Form::text('name',null,['id'=>'name' , 'class'=>'form-control', 'placeholder'=>'Enter University Namw'])}}
                <br>
                {{Form::textarea('address', null, array('class' => 'form-control', 'rows'=>'2','placeholder'=>'Address bilgileri gir'))}}
                </div>
                <div class="modal-footer">
                  <a href="#" data-dismiss="modal" class="btn">Close</a>
                  <button type="submit" class=" btn btn-primary">Add University</button>
                </div>
              </div>
            </div>
        </div>
    {{Form::close()}}
    <!-- Model window ends here -->


    <!-- Model window for Edit University starts here -->
    <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">         
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                    <h4 class="modal-title custom_align" id="Heading">Edit {{$university->name}}</h4>
                </div>

                <div class="modal-body">
                    <div class="form-group">
                        <input class="form-control " type="text" placeholder="Mohsin">
                    </div>

                    <div class="form-group">        
                        <input class="form-control " type="text" placeholder="Irshad">
                    </div>

                    <div class="form-group">
                        <textarea rows="2" class="form-control" placeholder="CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan"></textarea>
                    </div>
                </div>

                <div class="modal-footer ">
                    <button type="button" class="btn btn-warning btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span> Update</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Model window for Edit University ends here -->
    
    
    <!-- Model window for Delete University starts here -->
    <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                    <h4 class="modal-title custom_align" id="Heading">Delete this entry</h4>
                </div>

                <div class="modal-body">
                    <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Are you sure you want to delete this Record?</div>
                </div>

                <div class="modal-footer ">
                    <button type="button" class="btn btn-success" ><span class="glyphicon glyphicon-ok-sign"></span> Yes</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> No</button>
                </div>

            </div> 
        </div>
    </div>
    <!-- Model window for Delete University ends here -->

@stop


@section('scripts')
    <script>    
        $('#openBtn').click(function(){
            $('#myModal').modal({show:true})
        });
    </script>
@stop







		