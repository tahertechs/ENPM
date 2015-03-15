    <div class="sidebar">

        <form>
          <div class="form-group">
            <select class="form-control">
              <option value="tum-fakulteler">Tüm Fakülteler</option>
              <option value="muhendislik">Mühendislik Fakülte</option>
              <option value="iibf">İktisadi ve İdari Bil. Fakültesi</option>
              <option value="hukuk">Hukuk Fakültesi</option>
            </select>
          </div>
          <div class="form-group">
            <select class="form-control">
              <option value="tum-bolumler">Tüm Bölümler</option>
              <option value="bilgisayar-muh">Bilgisayar Mühendisliği</option>
              <option value="elektirik-elektronik-muh">Elektrik ve Elektronik Müh.</option>
              <option value="harita-muh">Harita Mühendisliği</option>
            </select>
          </div>
          <div class="form-group">
            <select class="form-control">
              <option value="tum-siniflar">Tüm Sınıflar</option>
              <option value="1-sinif">1. Sınıf</option>
              <option value="2-sinif">2. Sınıf</option>
              <option value="3-sinif">3. Sınıf</option>
              <option value="4.sinif">4. Sınıf</option>
            </select>
          </div>
          <div class="form-group">
            <select class="form-control">
              <option value="tum-dersler">Tüm Dersler</option>
              <option value="bmg">Bilgisayar Mühendisliğine Giriş</option>
              <option value="mat-1">Matematik I</option>
              <option value="bilg-prog-1">Bilgisayar Programlama I</option>
              <option value="bilg-prog-2">Bilgisayar Programlama II</option>
              <option value="gorsel-prog">Görsel Programlama</option>
              <option value="lojik-devre">Lojik Devreler</option>
              <option value="mikroislemciler">Mikroişlemciler</option>
              <option value="VTYS">Veri Tabanı Yönetim Sis.</option>
            </select>
          </div>
          <div class="form-group">
            <button href="#" class="btn btn-info" style="width:100%">Not Getir</button>
          </div>
        </form> <!-- end not getir form -->


        <div class="wantnot hidden-xs">
            <div class="row text-center">
                <a href=""><h4><b>Not İstekleri</b></h4></a>
            </div>

            @foreach(Question::orderBy('created_at','desc')->take(5)->get() as $question)

                <div class="row">
                    <div class="col-xs-3">
                        <img class="img-responsive" src="http://www.igradglobal.in/wp-content/uploads/2014/06/default-user.png">
                    </div>
                    <div class="col-xs-9">
                        <div class="row">
                            <h5><a href="{{URL::route('users.show',$question->author->username)}}">{{$question->author->name}}</a></h5>
                        </div>
                        <div class="row">
                            <p>{{$question->title}}</p>
                        </div> 
                        <div class="row">
                            <a href="{{URL::route('questions.show',$question->slug)}}">{{$question->answers->count()}} Cevap &nbsp</a>
                            <!-- <a href=""> Beğen</a><span>(0)</span> -->
                            <span class="pull-right">{{$question->created_at->diffForHumans()}}</span>
                        </div>             
                    </div>
                </div>

            @endforeach

            <div class="row text-center">
                <a href="{{URL::route('questions.index')}}"><h5>Daha fazla gör</h5></a>
            </div>

        </div> <!-- end wantnot -->

    </div> <!-- end sidebar  -->