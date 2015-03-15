<style>
	.widget {
    position: relative;
    clear: both;
    width: auto;
    margin-bottom: 2em;
    overflow: hidden;
}


.widget-header + .widget-content {
    border-top: medium none;
    border-top-left-radius: 0px;
    border-top-right-radius: 0px;
}

.widget-content {
    padding: 20px 15px 15px;
    background: none repeat scroll 0% 0% #FFF;
    border: 1px solid #D5D5D5;
    border-radius: 5px;
}

.shortcuts {
    text-align: center;
}

.shortcut:hover {
    background-color: #19BC9C;
}

.shortcuts .shortcut {
    width: 22.5%;
    display: inline-block;
    padding: 12px 0px;
    margin: 0px 0.9% 1em;
    vertical-align: top;
    text-decoration: none;
    background: none repeat scroll 0% 0% #F9F6F1;
    border-radius: 5px;
}

a:hover {
    color: #19BC9C;
}

</style>
<hr>
<div class="container">
	<div class="row">
        <!-- /col-md-12 -->
        <div class="col-md-12">
          <div class="widget">
            <div class="widget-header"> <i class="icon-bookmark"></i>
              <!-- <h3>Important Shortcuts</h3> -->
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <div class="shortcuts"> 

                <a href="{{URL::route('admin.dashboard')}}" class="shortcut"> 
                  <i class="shortcut-icon icon-tag"></i>
                  <span class="shortcut-label">DASHBOARD</span> 
                </a>

              	<a href="{{URL::route('admin.users.index')}}" class="shortcut">
              		<i class="shortcut-icon icon-list-alt"></i>
              		<span class="shortcut-label">KULLANICILAR</span> 
              	</a>

              	<a href="{{URL::route('admin.posts.index')}}" class="shortcut">
              		<i class="shortcut-icon icon-bookmark"></i>
              		<span class="shortcut-label">NOTLAR</span> 
              	</a>

              	<a href="{{URL::route('admin.posts.index')}}" class="shortcut">
              		<i class="shortcut-icon icon-signal"></i> 
              		<span class="shortcut-label">SINAVLAR</span>
              	</a>
              		 
              	<a href="{{URL::route('admin.questions.index')}}" class="shortcut"> 
              		<i class="shortcut-icon icon-comment"></i>
              		<span class="shortcut-label">SORULAR</span> 
              	</a>

              	<a href="{{URL::route('admin.questions.index')}}" class="shortcut">
              		<i class="shortcut-icon icon-user"></i>
              		<span class="shortcut-label">YORUMLAR</span> 
              	</a>

              	<a href="{{URL::route('admin.universities.index')}}" class="shortcut">
              		<i class="shortcut-icon icon-file"></i>
              		<span class="shortcut-label">UNIVERSITELER</span> 
              	</a>

              	<a href="#" class="shortcut">
              		<i class="shortcut-icon icon-picture"></i> 
              		<span class="shortcut-label">BOLUMLER</span> 
              	</a> 
              </div>
              <!-- /shortcuts --> 
            </div>
            <!-- /widget-content --> 
          </div>
          <!-- /widget -->
        </div>
        <!-- /col-md-12 --> 
	</div>
</div>


