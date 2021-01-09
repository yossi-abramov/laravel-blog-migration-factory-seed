@extends('layout.master')

@section('content')

<h1>{{ $post->title }}</h1>

<div><strong>Tags:</strong>
    @foreach($post->tags as $tag)
        <span>{{ App\Models\Tag::find($tag->tag_id)->tag }}@if(!$loop->last),@endif</span>
    @endforeach
</div>

{!! $post->post !!}

@endsection

