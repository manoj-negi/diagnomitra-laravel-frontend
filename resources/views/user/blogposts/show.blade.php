@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $blogPost->title }}</h1>
    <img src="{{ asset('storage/' . $blogPost->image) }}" class="img-fluid" alt="{{ $blogPost->title }}">
    <p>{{ $blogPost->content }}</p>
    <p><strong>Author:</strong> {{ $blogPost->author }}</p>
</div>
@endsection
