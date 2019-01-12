@extends('template.home')

@section('content');
	<!--Carousel Wrapper-->
    <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel" data-interval="false">
        <!--Indicators-->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-2" data-slide-to="0" class=""></li>
            <li data-target="#carousel-example-2" data-slide-to="1" class="active"></li>
            <li data-target="#carousel-example-2" data-slide-to="2"></li>
        </ol>
        <!--/.Indicators-->

        <!--Slides-->
        <div class="carousel-inner" role="listbox">

            <!--First slide-->

            <!--/First slide-->

            <!--Second slide-->
            <div class="carousel-item ">
                <!--Mask color-->
                <div class="view">
                    <!--Video source-->
                    <video autoplay="" loop="" playsinline="" muted="">
                        <source  src="{{ asset("/wikisunda/video/3.mp4") }}" type="video/mp4">
                    </video>
                    <!-- Carousel content -->
                    <div class="full-bg-img flex-center mask rgba-purple-light white-text">
                      <ul class="animated fadeInUp col-md-12 list-unstyled">
                        <li>
                          <h1 class="font-weight-bold text-uppercase">Art and culinary sundanese are important</h1>
                        </li>
                        <li>
                          <p class="font-weight-bold text-uppercase py-4">And all of them are for you</p>
                        </li>
                    
                      </ul>
                    </div>
                </div>
                <!--/Mask color-->
            </div>
            <!--/Second slide-->
            <div class="carousel-item active">
                <!--Mask-->
                <div class="view">
                  <!--Video source-->
                  <video autoplay="" loop="" playsinline="" muted="">
                      <source  src="{{ asset("/wikisunda/video/1.mp4") }}" type="video/mp4">
                  </video>
                  <!-- Carousel content -->
                  <div class="full-bg-img flex-center mask rgba-indigo-light white-text">
                    <ul class="animated fadeInUp col-md-12 list-unstyled list-inline">
                      <li>
                        <h1 class="font-weight-bold text-uppercase">DISCOVER SUNDANESE</h1>
                      </li>
                      <li>
                        <p class="font-weight-bold text-uppercase py-4">Explore all about Sunda in one click!</p>
                      </li>
                  
                    </ul>
                  </div>
                </div>
                <!--/Mask-->
            </div>
            <!--Third slide-->
            <div class="carousel-item">
                <!--Mask color-->
                <div class="view">
                    <!--Video source-->
                    <video autoplay="" loop="" playsinline="" muted="">
                        <source  src="{{ asset("/wikisunda/video/2.mp4") }}" type="video/mp4">
                    </video>
                    <!-- Carousel content -->
                    <div class="full-bg-img flex-center mask rgba-blue-light white-text">
                      <ul class="animated fadeInUp col-md-12 list-unstyled">
                        <li>
                          <h1 class="font-weight-bold text-uppercase">History Of Sundanese</h1></li>
                        <li>
                          <p class="font-weight-bold text-uppercase py-4">Explore your knowledge about history of sunda</p>
                        </li>
                     
                      </ul>
                    </div>
                </div>
                <!--/Mask color-->
            </div>
            <!--/Third slide-->
        </div>
        <!--/.Slides-->

        <!--Controls-->
        <a class="carousel-control-prev" href="#" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        <!--/.Controls-->
    </div>
    <!--/.Carousel Wrapper-->
@endsection