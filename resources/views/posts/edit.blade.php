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
                <h1>Edit Post</h1>
				<form method="post" action="{{ route('post.update', ['id' => $post->id]) }}">
					{{ csrf_field() }}
					<div class="form-group">
						<label for="name">Title</label>
						<input type="text" class="form-control" id="id_title" name="title" style="width:40%" aria-describedby="title" value="{{ $post->title }}">
					</div>
					<div class="form-group">
						<label for="description">Description</label>
						<textarea class="form-control" id="id_description" rows="20" name="description">{{ $post->description }}</textarea>
					</div>
					<button type="submit" class="btn btn-primary">update post</button>
				</form>
            </main>
        </div>
    </div>
@endsection
