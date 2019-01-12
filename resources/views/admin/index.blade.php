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
	            <div class="content border">
	               <table class="table table-bordered">
	                  <col width="5%">
	                  <col width="20%">
	                  <col width="55%">
	                  <thead>
	                     <tr class="text-center">
	                        <th>#</th>
	                        <th class="text-left">Title Article</th>
	                        <th>Content Article</th>
	                        <th></th>
	                     </tr>
	                  </thead>
	                  <tbody>
	                     <tr>
	                        <th class="text-center">1</th>
	                        <th>Article #01</th>
	                        <th>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis necessitatibus in
	                           harum
	                           corporis molestiae neque enim cupiditate ducimus repellendus, dicta placeat blanditiis velit
	                           suscipit. Animi esse sunt natus amet quos.</th>
	                        <th>
	                           <a href="#" class="btn btn-success btn-sm m-0 waves-effect">Edit</a>
	                           <button type="button" class="btn btn-danger btn-sm m-0 waves-effect" onclick="return confirm('Are you sure to delete this article ?')">Delete</button>
	                        </th>
	                     </tr>
	                     <tr>
	                        <th class="text-center">2</th>
	                        <th>Article #02</th>
	                        <th>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis necessitatibus in
	                           harum
	                           corporis molestiae neque enim cupiditate ducimus repellendus, dicta placeat blanditiis velit
	                           suscipit. Animi esse sunt natus amet quos.</th>
	                        <th>
	                           <a href="#" class="btn btn-success btn-sm m-0 waves-effect">Edit</a>
	                           <button type="button" class="btn btn-danger btn-sm m-0 waves-effect" onclick="return confirm('Are you sure to delete this article ?')">Delete</button>
	                        </th>
	                     </tr>
	                  </tbody>
	               </table>
	            </div>
	        </div>
	    </div>
   </div>
@endsection