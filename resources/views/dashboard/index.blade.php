@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2>{{ $posts }}</h2>
            <a href="{{ route('post.index') }}">aaa</a>
        </div>
    </div>
</div>
@endsection
