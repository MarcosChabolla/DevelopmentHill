@extends('layouts.app')

@section('content')

	
	<div class="card">
		<div class="card-header">Edit post: {{ $post->title }}</div>

		<div class="card-body">
			<form action="{{ route('post.update', ['id' => $post->id ]) }}" method="post" enctype="multipart/form-data"> 
				{{csrf_field()}}
				<div class="form-group">
					<label for="title">Title</label>
					<input type = "text" name = "title" value = "{{ $post->title }}" class="form-control"></input>
				</div>
				<div class="form-group">
					<label for="featured">Featured Image</label>
					<input type = "file" name = "featured" class="form-control"></input>
				</div>
				<div class="form-group">
					<label class="category">Select a Category</label>
					<select name="category_id" id="category" class="form-control">
						@foreach($categories as $category)
							<option value="{{ $category->id }}"
								@if($post->category->id == $category->id)
									selected
								@endif
								> {{ $category->name }}</option>
						@endforeach
					</select>
				</div>
				<div class="form-group">
					<label for = "tags">Select Tags</label>
					@foreach($tags as $tag)
					<div class="checkbox">
						<label><input name="tags[]" type="checkbox" value="{{ $tag->id }}" 

							@foreach($post->tags as $t)
								@if($tag->id == $t->id)
									checked
								@endif
							@endforeach
							 > {{ $tag->tag }}</label>
					</div>
					@endforeach
				</div>
				<div class="form-group">
					<label for="content">Content</label>
					<textarea name="content" id="content" cols="5" rows = "5" class="form-control">{{ $post->content }}</textarea>
				</div>
				<div class="form-group">
					<div class="text-center">
						<button class="btn btn-success" type="submit">Update Post</button>
					</div>
				</div>
			</form>
		</div>
	</div>
	Lorem
	
@stop

@section('scripts')

 <script>
    $(document).ready(function() {
        $('#content').summernote();
    });
  </script>

  @stop