@extends('part.base')
@section('title','Home')
@section('main')

    @include('part.header')

    <!-- Page Header -->
    <header class="masthead" style="background-image: url({{ asset('./img/home-bg.jpg') }})">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="site-heading">
                        <h1>Nhím Blog</h1>
                        <span class="subheading">Bài tập về nhà</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                @foreach($posts as $post)
                <div class="post-preview">
                    <a href="{{ route('post.show',$post->id) }}">
                        <h2 class="post-title">
                            {{ $post->title }}
                        </h2>
                        <h3 class="post-subtitle">
                            {!! $post->content !!}
                        </h3>
                    </a>
                </div>
                <hr>
                @endforeach
            </div>
        </div>
    </div>
@endsection
