@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-8">
        <img class="w-100" src="/storage/ {{ $post->image }}" alt="{{ $post->caption }}">
    </div>
</div>
@endsection
