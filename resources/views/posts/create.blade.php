@extends('layouts.master')

@section('content')
  <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script>tinymce.init({ 
						selector:'textarea',
						plugins : 'advlist autolink link image lists charmap print preview 	table 	textcolor'						
					});
	</script>

    <div class="container-fluid">
        <div class="row">
            <main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3">
                <h1>Create Post</h1>
                    <form method="post" action="{{ route('posts.create') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="name">Title</label>
                            <input type="text" class="form-control" style="width:40%" id="id_title" name="title" aria-describedby="title" placeholder="Enter title">
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
								<textarea class="form-control" id="id_description" rows="20" name="description" placeholder="Description"></textarea>
                        </div>

						<div class="input-group control-group increment" style="width:40%">
						  <input type="file" name="filename[]" class="form-control" required>
						  <div class="input-group-btn"> 
							<button class="btn btn-success" type="button"><i class="glyphicon glyphicon-plus"></i>Thumbnail</button>
						  </div>
						</div>
						<br/><br/>
                        <button type="submit" class="btn btn-primary">Create post</button>
                    </form>
            </main>
        </div>
    </div>
	
	<script type="text/javascript">

		$(document).ready(function() {

		  $(".btn-success").click(function(){ 
			  var html = $(".clone").html();
			  $(".increment").after(html);
		  });

		  $("body").on("click",".btn-danger",function(){ 
			  $(this).parents(".control-group").remove();
		  });

		});

	</script>
	
@endsection
