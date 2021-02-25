@extends('post.post')
@section('content')
{{--  --}}




<section class="featured-section">
    <div class="container">
        <div class="row gutter-parent-10">
            <div class="col-lg-12 col-xl-12">
                <div class="featured-slider post-slider">
                    <div class="post-slider-header">
                        <h3 class="stories-title">New Recomendations</h3>
                    </div>
                    <div class="owl-carousel">
                        @foreach($posts as $post)
                            <div class="item">
                                <div class="post-item post-block">
                                    <div class="post-img-wrap">
                                        @foreach($post->photo as $img)
                                        <a href="" class="post-img" style="background-image: url({{asset(Storage::url('images/post/' . $img->image)) }});"></a>
                                        @endforeach
                                    </div>
                                    <div class="entry-header">
                                        <div class="entry-meta category-meta">

                                            <div class="cat-links">
                                                @foreach($post->category->take(3) as $category)
                                                <a href="">
                                                    {{ $category->name }}
                                                @endforeach
                                                </a>
                                            </div>

                                        </div>
                                        <h2 class="entry-title">
                                            <a href="">
                                                {{ $post->title }}
                                            </a>
                                        </h2>
                                        <div class="entry-meta">
                                            <div class="date">
                                                <a href="">{{ $post->created_at->since() }}</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="gallery">
    <div class="container bg-light">
      <div class="row">
         @foreach($posts  as $post)
         <div class="col-lg-4 mb-4">
            <div class="card shadow ">
            <div class="post-img-wrap">
                    @foreach ($post->photo as $img)
                    <a href="" class="post-img" style="background-image: url({{asset(Storage::url('images/post/' . $img->image)) }});');"></a>
                    @endforeach
                    <div class="entry-meta category-meta">
                        <div class="cat-links">
                            @foreach($post->category->take(3) as $category)
                                                <a href="">
                                                    {{ $category->name }}
                                                @endforeach
                                                </a>
                        </div>
                    </div>
                </div>
        <div class="card-body">
                    <h3 class="entry-title"><a href="">
                        {{ $post->title }}
                    </a></h3>

                    <div class="entry-content">
                        <p>{!!  substr(strip_tags($post->content), 0, 300) !!} ...</p>
                    </div>
          <a href="" class="btn btn-outline-success btn-sm">Read More</a>
          <a href="" class="btn btn-outline-danger btn-sm"><i class="far fa-heart"></i></a>
                <div class="date"><a href="">{{ $post->created_at->since() }}</a></div>
                <div class="by-author vcard author">
                            <a href="">
                                @if (Auth::user())
                                <a href="{{Route('post.edit', ['id'=>$post->id])}}" class="btn btn-success">
                                    <i class="fa fa-edit"></i>
                                    edit
                                </a>
                            @else

                            @endif
                            {{-- Check Have Permission Delete post--}}
                            @if (Auth::user())
                                <a href="{{Route('post.delete', ['id'=>$post->id])}}" class="btn btn-danger">
                                    <i class="fas fa-trash"></i>
                                    delete
                                </a>
                            @else

                            @endif
                            </a>
                        </div>
        </div>
       </div>
      </div>

      @endforeach
    </div>
  </div>
  </section>
{{--  --}}

        </div>
        {{ $posts->links() }}
@endsection
