@extends('template.home')

@section('content')
	<div class="container">
   		<div class="controls-top">
            <a class="btn-floating" href="#multi-item-example" data-slide="prev" style="visibility: hidden;"><i class="fa fa-users"></i></a>
        </div>
	    <div class="row">
	        <div class="col-12 mb-3">
	            <a href="/admin/create" class="btn btn-primary btn-sm m-0 waves-effect">Add New Article</a>
	        </div>
	    </div>
	   
	    <div class="row">
	         <div class="col-12">
	         		@if (Session::has('success'))
				        <div class="col-md-12">
				          <div class="alert alert-success alert-dismissible">
				            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				            <h4><i class="icon fa fa-check"></i> Sukses!</h4>
				            {{ Session::get('success')}}
				          </div>
				        </div>
				    @elseif (Session::has('failed'))
				        <div class="col-md-12">
				          <div class="alert alert-danger alert-dismissible">
				            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				            <h4><i class="icon fa fa-close"></i> Failed!</h4>
				            {{ Session::get('failed')}}
				          </div>
				        </div>
				    @elseif(count($errors) > 0)
			            <div class="alert alert-danger alert-dismissible">
			              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			              <h4><i class="icon fa fa-close"></i> Failed!</h4>
			              @foreach($errors->all() as $error)
			                <p><i>{{ $error }}</i></p>
			              @endforeach
			            </div>
				    @endif
	            <div class="content border">
	               <table id="article" class="table table-striped table-bordered" style="width:100%">
	                  <col width="5%">
	                  <col width="20%">
	                  <col width="55%">
	                  <thead>
	                     <tr class="text-center">
	                        <th>#</th>
	                        <th class="text-left">Title Article</th>
	                        <th>Description Article</th>
	                        <th></th>
	                     </tr>
	                  </thead>
	                  <tbody>
	                  	@foreach($artikel as $atl)
	                  	@php $no = 1; @endphp
	                  	<tr>
	                  		<th class="text-center">{{ $no }}</th>
	                  		<th>{{ $atl->title }}</th>
	                  		<th>{{  $atl->description }}</th>
	                  		<th><a href="/admin/artikel/{{ $atl->id }}" class="btn btn-success btn-sm m-0 waves-effect">Edit</a></th>
	                  	</tr>
	                  	@endforeach
	                  </tbody>
	               </table>
	            </div>
	        </div>
	    </div>
   </div>
@endsection