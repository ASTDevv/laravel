@extends('layouts.app');

@section('content')
<h1>Posts</h1>
<hr>
@if(count($posts) > 0)
@foreach($posts as $post)
<div class="well">
	<div class="row">
		<div class="col-md-4 col-sm-4">
			@if($post->cover_image)
			<img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}">
			@else
			<img style="width:100%" src="/storage/cover_images/noimage.jpg">
			@endif
		</div>
		<div class="col-md-8 col-sm-8" style="word-wrap: break-word;">
			<h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
			<p class="ArticleBody">
				{{ str_limit(strip_tags($post->body), 450) }}
				@if (strlen(strip_tags($post->body)) > 400)
				... <a href="{{ action('PostsController@show', $post) }}" class="btn btn-info btn-sm">Read More</a>
				@endif
			</p>
			<small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
		</div>
	</div>
</div>
@endforeach
{{$posts->links()}}
@else
<p>No posts found</p>
@endif
@endsection