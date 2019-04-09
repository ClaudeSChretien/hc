<!--galley start-->
<section id="gallery" class="gallery">
        <div class="container">
            <div class="gallery-details">
                
                <div class="gallery-box">
                    <div class="gallery-content">
                          <div class="filtr-container">
                              <div class="row">
                                    @foreach($photos as $photo)
                                    
                                    


                                  <div class="col-md-6">
                                      <div class="filtr-item">
                                        <img src="photo/{{$photo->filename}}" alt="portfolio image"/>
                                        <div class="item-title">
                                            <p><i class="fa fa-camera-retro"></i><span> {{$photo->photographer}}</span></p>
                                            <p><i class="fa fa-calendar-alt"></i><span> {{$photo->date}}</span></p>
                                            <p><i class="fa fa-map-marker-alt"></i><span> <a href="{{$photo->location_url}}">{{$photo->location}}</a></span></p>
                                        </div><!-- /.item-title -->
                                        
                                    </div><!-- /.filtr-item -->
                                  </div><!-- /.col -->
                                    @endforeach

                                  

                              </div><!-- /.row -->

                          </div><!-- /.filtr-container-->
                    </div><!-- /.gallery-content -->
                </div><!--/.galley-box-->
            </div><!--/.gallery-details-->
        </div><!--/.container-->

    </section><!--/.gallery-->
    <!--gallery end-->