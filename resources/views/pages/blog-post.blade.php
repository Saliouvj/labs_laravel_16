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
        <div class="row">
            <div class="col-md-8 col-sm-7 blog-posts">
                <!-- Single Post -->
                <div class="single-post">
                    <div class="post-thumbnail">
                        <img src="../img/{{$article->image}}" alt="">
                        <div class="post-date">
                            <h2>{{$article->dateDay}}</h2>
                            <h3>{{$article->dateMonth}} {{$article->dateYear}}</h3>
                        </div>
                    </div>
                    <div class="post-content">
                        <h2 class="post-title">{{$article->title}}</h2>
                        <div class="post-meta">

                            <!-- Nom auteur -->
                            <a href="">{{$article->user->name}}</a>

                            <!-- Catégorie de l'article -->
                            <a href="">{{$article->category->name}}</a>

                            <!-- Nombre de commentaires -->
                            @if ($article->comment->where('validate', 1)->count() <= 1)
                                <a href="">{{$article->comment->where('validate', 1)->where('trash', 0)->count()}} Comment</a>
                            @else
                                <a href="">{{$article->comment->where('validate', 1)->where('trash', 0)->count()}} Comments</a>
                            @endif

                        </div>
                        <p>{{$article->text}}</p>
                    </div>
                    <!-- Post Author -->
                    <div class="author">
                        <div class="avatar">
                            <img src="../img/{{$article->user->photo}}" alt="" style="width: 100px">
                        </div>
                        <div class="author-info">
                            <h2>{{$article->user->firstname}} {{$article->user->name}}, <span>Author</span></h2>
                            <p>{{$article->user->description}}</p>
                        </div>
                    </div>
                    
                    <!-- Post Comments -->
                    <div class="comments">
                        <h2>Comments ({{$comments->count()}})</h2>
                        
                        <ul class="comment-list">
                            @foreach ($comments as $comment)
                            <li>
                                <div class="commetn-text">
                                    <h3>{{$comment->name}} | {{$comment->dateDay}} {{$comment->dateMonth}}, {{$comment->dateYear}} | Reply</h3>
                                    <p>{{$comment->comment}} </p>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- Comment Form -->
                    <div class="row">
                        <div class="col-md-9 comment-from">
                            <h2>Leave a comment</h2>

                            <form class="form-class" method="POST" action={{route('commentStore', $article->id)}}>
                                @csrf
                                <div class="row">
                                    <!-- Name -->
                                    <div class="col-sm-6">
                                        <input type="text" name="name" id="name" placeholder="Your name">
                                    </div>
                                    <!-- E-mail -->
                                    <div class="col-sm-6">
                                        <input type="text" name="email" id="email" placeholder="Your email">
                                    </div>
                                    <div class="col-sm-12">
                                        <!-- Message -->
                                        <textarea name="comment" id="comment" placeholder="Message"></textarea>
                                        <!-- SUBMIT -->
                                        <button class="site-btn" type=submit>send</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
            <!-- Sidebar area -->
            <div class="col-md-4 col-sm-5 sidebar">
                <!-- Search -->
                <div class="widget-item">
                    <form action="{{route('search')}}" class="search-form">
                        <input type="text" placeholder="Search" name="search">
                        <button class="search-btn"><i class="flaticon-026-search"></i></button>
                    </form>
                </div>
                <!-- Categories -->
                @if ($article->category->id != 5)
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
                @endif
                <!-- Tags -->
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