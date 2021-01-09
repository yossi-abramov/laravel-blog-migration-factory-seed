@extends('layout.master')

@section('content')

<h1>Posts</h1>
@foreach ($posts as $post)
<div>
    <h2>#{{$post->id}} {{ $post->title }}</h2>
    <p>{{ $post->description }}</p>
    <div><strong>Tags:</strong>
        @foreach($post->tags as $tag)
            <span>{{ App\Models\Tag::find($tag->tag_id)->tag }}@if(!$loop->last),@endif</span>
        @endforeach
    </div>
    <a  href="{{ route('blog', $post->slug ) }}">
        <button style="padding: 5px;cursor:pointer">Read More</button>
    </a>
</div>
@endforeach    

@endsection

