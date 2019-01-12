@extends('template.home')

@section('content')
	<div class="container">
   		<div class="controls-top">
            <a class="btn-floating" href="#multi-item-example" data-slide="prev" style="visibility: hidden;"><i class="fa fa-users"></i></a>
        </div>
        @if(count($errors) > 0)
			            <div class="alert alert-danger alert-dismissible">
			              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			              <h4><i class="icon fa fa-close"></i> Failed!</h4>
			              @foreach($errors->all() as $error)
			                <p><i>{{ $error }}</i></p>
			              @endforeach
			            </div>
				    @endif

	    <form method="POST" action="/admin/artikel/{{ $artikel->id }}" enctype="multipart/form-data">
	    	@csrf
        <input type="hidden" name="artikelid" value="{{ $artikel->id }}">
	    	<label for="titleName" class="grey-text font-weight-light">Title Article</label>
            <div class="input-group mb-3">
               <input type="text" name="artikel_title" class="form-control" value="{{ $artikel->title }}" placeholder="Title Article">
            </div>
            <label for="titleName" class="grey-text font-weight-light">Description Article</label>
            <div class="input-group mb-3">
               <input type="text" name="artikel_desk" class="form-control" value="{{ $artikel->description }}" placeholder="Description Article">
            </div>
            <label for="titleName" class="grey-text font-weight-light">Category Article</label>
            <div class="input-group mb-3">
              <select class="browser-default custom-select" name="artikel_cate">
                <option value="{{ $artikel->category }}">{{ $artikel->category }} (Current)</option>
              	<option value="art">Art</option>
              	<option value="place">Place</option>
              	<option value="history">History</option>
              	<option value="culinary">Culinary</option>
              </select>
            </div>
            <label for="titleName" class="grey-text font-weight-light">Photo Article</label>
            <div class="input-group mb-3">
               <input type="file" name="artikel_photo">
               <img src="{{ $artikel->image }}" style="width:300;max-width:300px" height="100"></a>
            </div>
        	<textarea id="artikel_editor" name="artikel_artikel" rows="10" cols="80">
        		{{ $artikel->article }}
            </textarea>

            <button type="submit" class="btn btn-primary">Rubah Artikel</button>
        </form>
	 </div>
@endsection