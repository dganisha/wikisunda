@extends('template.home')

@section('content')
	<div class="container">
        <!-- Content here -->

        <!--Carousel Wrapper-->
        <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

            <!--Controls-->
            <div class="controls-top">
                <a class="btn-floating" href="#multi-item-example" data-slide="prev"><i class="fa fa-users"></i></a>
                <a class="btn-floating" href="#multi-item-example" data-slide="next"><i class="fa fa-chevron-right"></i></a>
            </div>
            <!--/.Controls-->

   
            <!--/.Indicators-->

            <!--Slides-->
            <div class="carousel-inner" role="listbox">
                
                <div class="carousel-item active">
                    @foreach($artikel as $arti)
                    <div class="col-md-4 clearfix d-none d-md-block">
                        <div class="card mb-2">
                            <img class="card-img-top" src="{{ $arti->image }}" alt="{{ $arti->title }}" style="width:300;max-width:300px" height="270">
                            <div class="card-body">
                                <h4 class="card-title">{{ $arti->title }}</h4>
                                <p class="card-text">{{ $arti->description }}</p>
                                <a href="artikel/culinary/artikel-{{ urlSlug($arti->title) }}" class="btn btn-primary">Lihat Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <!--/.First slide-->
            </div>
        </div>

        </div>
        <br>
    </div>

@endsection