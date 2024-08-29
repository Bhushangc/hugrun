<link rel="stylesheet" href="/css/article.css">
@extends('frontend.layout.islandic')

@section('title', 'Hugrún Articles')


@section('content')
    <section id="articles">
        <div class="articles-categories">
            <div class="articles-title">
                <h1>Mental Health Information</h1> <hr>
                @foreach ($allBlogs as $blog)
                    <p @if ($blog->id == $currentBlog->id)id="current-page"@endif><a href="{{ route('article.health.is', ['id' => $blog->id]) }}">{{ $blog->title }}</a></p>
                @endforeach
            </div>
        </div>
        <div class="mobile-category">
            <button>Articles</button>
        </div>
        <div class="articles-categories-mobile">
            <div class="articles-title">
                <div class="top-nav">
                    <h1>Mental Health Information</h1> 
                </div>
                <div class="bottom">
                    @foreach ($allBlogs as $blog)
                        <p @if ($blog->id == $currentBlog->id)id="current-page"@endif><a href="{{ route('article.health.is', ['id' => $blog->id]) }}">{{ $blog->title }}</a></p>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="articles-contents">
            <div class="articles-contents-heading">
                <div class="logo">
                    <img src="{{ asset('images/frontend/hugrun_logo.svg')}}" alt="logo here" />
                </div>
                <h6>Mental Health Information > <span>{{ $currentBlog->title }}</span></h6>
                <h6 class="date"><span>{{ $currentBlog->created_at }}</span></h6>
            </div>
            <div class="articles-content-body">
                <h3>{{ $currentBlog->title }}</h3>
                <!-- <img src="{{ asset('images/frontend/home-left.jpg')}}" alt="parents"> -->
                
                {!! $currentBlog->content !!}
               
            </div>
        </div>
    </section>

    <script src="{{ asset('/js/hugrun.js')}}"></script>
    <script src="{{ asset('/js/article.js')}}"></script>
@endsection