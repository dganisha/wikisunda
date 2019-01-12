@extends('template.home')

@section('content')

<br>

  




    <div class="container">
        <!-- Content here -->

        <!--Carousel Wrapper-->
<!-- Card Regular -->

</div>
<!-- Card Regular -->


<div id="home-section">
      <div class="container">
        <div class="container">
            <nav class="d-flex justify-content-center wow fadeIn my-5">
                <h4>Real art about sunda</h4>
            </nav>
            <hr>
            <!--Section: Cards-->
            <section class="text-center">

                <!--Grid row-->
                <div class="row mb-4 wow fadeIn">

                 @foreach($artikel as $arti)
                    <!--Grid column-->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <!--Card-->
                        <div class="card">

                  
                                  <img class="card-img-top" src="{{ $arti->image }}" alt="{{ $arti->title }}" >
                             

                            <!--Card content-->
                            <div class="card-body">
                                <!--Title-->
                               <!-- Title -->
       <h4 class="card-title">{{ $arti->title }}</h4>
    <!-- Subtitle -->

    <!-- Text -->
     <p class="card-text">{{ $arti->description }}</p>
                                  <a href="artikel/art/artikel-{{ urlSlug($arti->title) }}" class="btn btn-primary">Lihat Selengkapnya</a>
                                    <i class="fa fa-play ml-2"></i>
                                </a>
                            </div>

                        </div>
                        <!--/.Card-->

                    </div>
                    <!--Grid column-->
                    @endforeach

                </div>
                <!--Grid row-->

            </section>
              <!--Section: Cards-->
              <!--Section: Jumbotron-->
         </div>
        </div>

        </div>
        <br>
    </div>

@endsection