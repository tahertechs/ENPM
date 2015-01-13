<div class="container">
    @if(Session::has('notifySuccess'))
        <div class="alert alert-success"> {{ Session::get('notifySuccess') }} </div>
    @endif

    @if(Session::has('notifyError'))
        <div class="alert alert-danger"> {{ Session::get('notifyError') }} </div>
    @endif
</div>