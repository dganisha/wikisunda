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

  

            <div class="card text-center">
                <div class="card-header">
                    {{ $cariArtikel->category }}
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{ $cariArtikel->title }}</h5>
                    <small class="text-muted" style="font-size: 10px">oleh {{ $cariArtikel->user->name }}</small>
                    <hr>
                    <p class="card-text">{!! $cariArtikel->article !!}</p>
                </div>
                <div class="card-footer text-muted">
                    {{ $cariArtikel->created_at }} - <small>dilihat: {{ $cariArtikel->viewer }}</small>
                </div>
            </div>
            <br>
         
        </div>
    </div>

@endsection