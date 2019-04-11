<!--blog start-->
<section id="blog" class="blog">
        <div class="container">
            <div class="blog-details">
                    <div class="gallary-header text-center">
                        <h2>
                            Blog
                        </h2>
                        <p>
                            Travel News from all over the world 
                        </p>
                    </div><!--/.gallery-header-->
                    <div class="blog-content">
                        <div class="row">
                            @foreach($blogs as $blog)
                            
                            <div class="col-sm-4 col-md-4">
                                <div class="thumbnail">
                                    <h2>{{$blog->author}} <span>{{$blog->date}}</span></h2>
                                    <div class="thumbnail-img">
                                        <img src="blog/{{$blog->filename}}" alt="blog-img">
                                        <div class="thumbnail-img-overlay"></div><!--/.thumbnail-img-overlay-->
                                    
                                    </div><!--/.thumbnail-img-->
                                  
                                    <div class="caption">
                                        <div class="blog-txt">
                                            <h3>
                                                <a href="#">
                                                    {{$blog->titre}}
                                                </a>
                                            </h3>
                                            <p>
                                                {{$blog->paragraphe}}
                                            </p>
                                            <a href="{{ route('blogs.show',$blog->id)}}">Read More</a>
                                        </div><!--/.blog-txt-->
                                    </div><!--/.caption-->
                                </div><!--/.thumbnail-->

                            </div><!--/.col-->
                        @endforeach
                        </div><!--/.row-->
                    </div><!--/.blog-content-->
                </div><!--/.blog-details-->
            </div><!--/.container-->

    </section><!--/.blog-->
    <!--blog end-->