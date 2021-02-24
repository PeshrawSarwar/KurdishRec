@extends('post.post')
@section('content')
{{--  --}}

{{-- <div class="top-stories-bar" >
    <div class="container">
        <div class="row top-stories-box clearfix">
            <div class="col-sm-auto">
                <div class="top-stories-label">
                    <div class="top-stories-label-wrap">
                        <span class="flash-icon"></span>
                        <span class="label-txt">
                            Top Stories
                        </span>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm top-stories-lists">
                <div class="row align-items-center">
                    <div class="col">
                        <div class="marquee">
                            @foreach ($posts as $post)
                                   <a href="">{{ $post->title }}</a>
                            @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}


<section class="featured-section">
    <div class="container">
        <div class="row gutter-parent-10">
            <div class="col-lg-12 col-xl-12">
                <div class="featured-slider post-slider">
                    <div class="post-slider-header">
                        <h3 class="stories-title">Main Section</h3>
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

<div class="container">
    <section id="newscard_card_block_posts-4" class="widget newscard-widget-card-block-posts">
        <div class="row gutter-parent-14">
            @foreach($posts  as $post)

            <div class="col-sm-6 post-col">
                <div class="post-item post-boxed">
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
                    <div class="post-content">
                        <h3 class="entry-title"><a href="">
                            {{ $post->title }}
                        </a></h3>
                        <div class="entry-meta">
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
                        <div class="entry-content">
                            <p>{!!  substr(strip_tags($post->content), 0, 300) !!} ...</p>
                        </div>
                    </div>
                </div>
            </div>

            @endforeach


        </div>
    </section>
</div>

{{--  --}}
{{-- <div class="d-flex flex-row bd-highlight mb-3 flex-wrap"> --}}
    {{-- @foreach ($posts as $post)

            <div class="col col-4 p-2 bd-highlight">

                <div class="card" style="width: 18rem;">
                    @foreach ($post->photo as $img)
                    <img src="{{ asset(Storage::url('images/post/' . $img->image)) }}" alt="" class="card-img-top">
                @endforeach
                    <div class="card-body">
                      <h5 class="card-title">{{ $post -> title }}</h5>
                      <p class="card-text">{{ $post->content }}</p>
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
                  </div>

            </div>


    @endforeach --}}
        </div>
        {{ $posts->links() }}
@endsection
