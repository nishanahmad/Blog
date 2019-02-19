@extends('layouts.master')

@section('title')
    All Posts
@endsection

@section('content')
	<style>
	.dataTables_filter { display: none; }
	</style>
	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js" type="text/javascript"></script>
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">
	<link rel="stylesheet" type="text/css" href="/css/glow_box.css">

	<div align="center">	
	<div class="panel panel-default" style="width:95%">
		<div class="panel-heading">
			<h2> Posts</h2>
		</div>
		
		@if (session('status'))
		<div class="alert alert-success">
			{{ session('status') }}
		</div>
		@endif

		@if (empty($posts))
			<p> No posts found.</p>
		@else
			
			<div align="center">
			<br>
			<input type="text" style ="width:10%" id="title" class="search-input-text textarea" placeholder="Search Title..." />&nbsp&nbsp&nbsp
			<input type="text" style ="width:10%" id="author" class="search-input-text textarea" placeholder="Search Author..." />&nbsp&nbsp&nbsp
			<br><br>
			</div>
			<table class="table display compact cell-border" cellspacing="0" id="table" style="width:70%">
				<thead>
					<tr>
						<th></th>							
						<th>Title</th>							
						<th>Author</th>
						<th>Status</th>
						<th>Created On</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					@foreach($posts as $post)
						 <tr style ="word-break:break-word;;font-size:15px">
							<td align="center"><a class="btn btn-primary btn-sm" href="/author/post/edit/{{ $post -> id }}">Edit</a></td>
							<td>{{ $post -> title }} </td>
							<td>{{ $post -> user -> name }} </td>
							<td>Published</td>
							<td>{{ date("d-m-Y",strtotime($post -> created_at)) }} </td>
							<td align="center"><a class="btn btn-success btn-sm" href="/author/post/{{ $post -> id }}">Preview</a></td>
						</tr>
					@endforeach
				</tbody>
			</table>
		@endif
		</div>
	</div>	
	<script>
		$(document).ready(function() {
		 
			// DataTable
			var table = $('#table').DataTable({
				"paging" : false
			});
		 
			// Apply the search
			$('#title').keyup(function(){
				table.column(1).search(this.value).draw();
			})
			$('#author').keyup(function(){
				table.column(2).search(this.value).draw();
			})
		} );
  </script>
@endsection