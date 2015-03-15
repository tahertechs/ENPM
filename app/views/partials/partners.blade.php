        <div class="row">
            <div class="col-xs-12">
                <div class="btn-group btn-group-justified">
                    <div class="btn-group" style="border-top: 6px solid #e92d00; border-bottom: 6px solid #e92d00;">
                        <button data-toggle="modal" data-target="#coming-soon" type="button" class="btn btn-nav">
                            <span class="glyphicon glyphicon-pencil"></span>
                            <p>Halısaha Rezervasyon</p>                    
                        </button>  
                    </div>
                    <div class="btn-group" style="border-top: 6px solid #290744; border-bottom: 6px solid #290744;">
                        <button data-toggle="modal" data-target="#coming-soon" type="button" class="btn btn-nav">
                            <span class="glyphicon glyphicon-comment"></span>
                            <p>Öğrencilerle Mesajlaş</p>
                        </button>
                    </div>
                    <div class="btn-group" style="border-top: 6px solid #DE1679; border-bottom: 6px solid #DE1679;">
                        <button data-toggle="modal" data-target="#coming-soon" type="button" class="btn btn-nav">
                            <span class="glyphicon glyphicon-hdd"></span>
                            <p>İkinci El Eşyalar</p>
                        </button>
                    </div>
                    <div class="btn-group" style="border-top: 6px solid #41A8B6; border-bottom: 6px solid #41A8B6;">
                        <button data-toggle="modal" data-target="#coming-soon" type="button" class="btn btn-nav">
                            <span class="glyphicon glyphicon-indent-left"></span>
                            <p>Gano Hesapla</p>
                        </button>
                    </div>
                </div> <!-- end btn-group -->
            </div> <!-- end col-xs-12 -->
        </div> <!-- end row -->
    </div> <!-- end container -->

    <footer class="footer" style="background-color:#3c3c3c">
      <div class="container">
        <div class="row" >
          <br>        
          <div class="col-sm-6" >
            <h3>Bize Ulaşın</h3>
            <p>
              <form class="form-horizontal" role="form">
                <div class="form-group">
                  <div class="col-lg-10">
                    <input type="text" class="form-control" placeholder="İsim...">
                  </div>
                </div><div class="form-group">
                  <div class="col-lg-10">
                    <input type="email" class="form-control" placeholder="E-mail...">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-lg-10">
                  <textarea class="form-control" style="resize:none" rows="2" placeholder="Mesaj..."></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-lg-10">
                    <button type="submit" style="color:black" class="btn">Gönder</button>
                  </div>
                </div>
              </form>
            </p>
          </div><!-- col-sm-6 -->

          <div class="col-sm-6" style="margin-top:45px;">
            <div class="row">
              <div class="col-xs-6">
                <ul class="footer-links">
                  <a href="{{URL::route('home')}}"><li><b>></b> &nbsp Anasayfa</li></a>
                  <a href="{{URL::to('/')}}"><li><b>></b> &nbsp ENPM nedir?</li></a>
                  <a href="{{URL::route('posts.create')}}"><li><b>></b> &nbsp Not Ekle</li></a>
                  <a href="{{URL::route('posts.index')}}"><li><b>></b> &nbsp Not İndir</li></a>
                  <a href="{{URL::route('questions.index')}}"><li><b>></b> &nbsp Not İste</li></a>
                </ul>
              </div>
              <div class="col-xs-6">
                <ul class="footer-links">
                  <a href="#"><li><b>></b> &nbsp Üyeler</li></a>
                  <a href="#"><li><b>></b> &nbsp Hakkımızda</li></a>
                  <a href="#"><li><b>></b> &nbsp İletişim</li></a>
                  <a href="#"><li><b>></b> &nbsp Profil</li></a>
                  <a href="#"><li><b>></b> &nbsp Üye Ol</li></a>
                </ul>
              </div>
            </div> <!-- end row -->
          </div><!-- col-sm-6 -->
        </div><!-- row -->     
      </div><!-- container -->
      
      <div class="alt-footer">
        <div class="container">
          <div class="col-xs-12 col-sm-7" id="copyright">
            <h4>2015 © <a href="http://tanturkyazilim.com" alt="Bootstrap Themes">Tantürk Yazılım. </a>Tüm hakları saklıdır.</h4>
          </div>
          <div class="col-xs-12 col-sm-5" id="social">
            <a href="" rel="tooltip" title="Facebook" class="facebook pull-right">Facebook</a>
            <a href="" rel="tooltip" title="Twitter" class="twitter pull-right">Twitter</a>
            <a href="" rel="tooltip" title="Facebook" class="google pull-right">Google</a>
            <a href="" rel="tooltip" title="Facebook" class="skype pull-right">Skype</a>
            <a href="" rel="tooltip" title="LinkedIn" class="linkedin pull-right">LinkedIn</a>
            <a href="" rel="tooltip" title="YouTube" class="youtube pull-right">YouTube</a>
          </div>
        </div> <!-- end container -->
      </div> <!-- end alt-footer --> 
    </footer>





    <!-- Coming Soon Model -->
    <div class="modal fade" id="coming-soon" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                    <h4 class="modal-title custom_align" id="Heading">Coming Soon.....</h4>
                </div>

                <div class="modal-body">
                    <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> This Feature is Coming very soon</div>
                </div>
            </div> 
        </div>
    </div>




