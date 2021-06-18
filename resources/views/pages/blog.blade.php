@extends('layouts.index')

@section('content')

@include('partial.preloader')

<!-- Header section -->
<header class="header-section">
    <div class="logo">
        <img src="img/logo.png" alt=""><!-- Logo -->
    </div>
    <!-- Navigation -->
    <div class="responsive"><i class="fa fa-bars"></i></div>
    <nav>
        <ul class="menu-list">
            <li><a href="{{route('home')}}">Home</a></li>
            <li><a href="{{route('services')}}">Services</a></li>
            <li class="active"><a href="{{route('blog')}}">Blog</a></li>
            <li><a href="{{route('contact')}}">Contact</a></li>
        </ul>
    </nav>
</header>
<!-- Header section end -->

@include('partial.blog-header')

<!-- page section -->
<div class="page-section spad">
    <div class="container">
        <div class="row" id="blogpaginate">
            <div class="col-md-8 col-sm-7 blog-posts">
                     
                <!-- Post item -->
                @foreach ($articles->reverse() as $article)
                
                <div class="post-item">
                    <div class="post-thumbnail">
                        <img src="img/{{$article->image}}" alt="">
                        <div class="post-date">
                            <h2>{{$article->dateDay}}</h2>
                            <h3>{{$article->dateMonth}} {{$article->dateYear}}</h3>
                        </div>
                    </div>
                    <div class="post-content">
                        <h2 class="post-title">{{$article->title}}</h2>
                        <div class="post-meta">

                            <!-- Nom de l'auteur -->
                            <a href="">{{$article->user->name}}</a>

                            <!-- Catégorie de l'article -->
                            <a href="">{{$article->category->name}}</a>

                            <!-- Nombre de commentaires -->
                            @if ($article->comment->where('post_id', "=", $article->id)->where('validate', 1)->count() <= 1)
                                <a href="{{route('blog-post', $article->id)}}">
                                    {{$article->comment->where('validate', 1)->count()}} Comment
                                </a>
                            @elseif ($article->comment->where('post_id', "=", $article->id)->where('validate', 1)->count() > 1)
                                <a href="{{route('blog-post', $article->id)}}">
                                    {{$article->comment->where('validate', 1)->count()}} Comments
                                </a>
                            @endif      
                        
                        </div>
                        <p>{{Str::limit($article->text, 200, '...')}}</p>
                        <a href="{{route('blog-post', $article->id)}}" class="read-more">Read More</a>
                    </div>
                </div>
                @endforeach

                <div>
                    {{-- {{$articles->links()}} --}}
                    {{ $articles->links('vendor.pagination.default') }}
                </div>
            </div>
            <!-- Sidebar area -->
            <div class="col-md-4 col-sm-5 sidebar">
                <!-- Single widget -->
                <div class="widget-item">
                    <!-- Searchbar -->
                    <form action="{{route('search')}}" class="search-form">
                        <input type="text" placeholder="Search" name="search">
                        <button class="search-btn"><i class="flaticon-026-search"></i></button>
                    </form>
                </div>
                <!-- Single widget -->
                <div class="widget-item">
                    <h2 class="widget-title">Categories</h2>
                    <ul>
                        @foreach ($categories as $category)
                            @if ($category->id != 5)
                                {{-- <li><a href="#">{{$category->name}}</a></li> --}}
                                <li><a href="{{route('searchCat', $category->id)}}">{{$category->name}}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </div>
                <!-- Single widget -->
                <div class="widget-item">
                    <h2 class="widget-title">Tags</h2>
                    <ul class="tag">
                        @foreach ($tags as $tag)
                            <li><a href="{{route('searchTag', $tag->id)}}">{{$tag->name}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- page section end-->

@include('partial.newsletter')

@endsection