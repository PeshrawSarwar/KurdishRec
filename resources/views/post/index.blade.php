@extends('post.post')
@section('content')
    @foreach ($posts as $post)
        <div class="card">
            <div class="card-header">
                {{ $post -> title }}
            </div>

            <div class="card-body">
                @foreach ($post->photo as $img)
                    <img src="{{ asset(Storage::url('images/post/' . $img->image)) }}" alt="" width="100" height="100">
                @endforeach

                {{ $post->content }}
            </div>

        @if (Auth::user())
            <a href="{{Route('post.edit', ['id'=>$post->id])}}" class="btn btn-success">
                <i class="fa fa-edit"></i>
                edit
            </a>

        @endif

        @if (Auth::user())
            <a href="{{Route('post.delete', ['id'=>$post->id])}}"" class="btn btn-danger">
                <i class="fas fa-trash"></i>
                delete
            </a>

        @endif
        </div>

@endforeach
        {{ $posts->links() }}
@endsection
