@extends('layouts.index')

@section('content')

@include('partial.preloader')

<!-- Header section -->
<header class="header-section">
    <div class="logo">
        <img src="img/{{$logo->name}}" alt="" style="height: 34px"><!-- Logo -->
    </div>
    <!-- Navigation -->
    <div class="responsive"><i class="fa fa-bars"></i></div>
    <nav>
        <ul class="menu-list">
            <li class="active"><a href="{{route('home')}}">Home</a></li>
            <li><a href="{{route('services')}}">Services</a></li>
            <li><a href="{{route('blog')}}">Blog</a></li>
            <li><a href="{{route('contact')}}">Contact </a></li>
        </ul>
    </nav>
</header>
<!-- Header section end -->
@include('partial.intro')
@include('partial.about')
@include('partial.testimonial')
@include('partial.services')
@include('partial.team')
@include('partial.promotion')
@include('partial.contact')

@endsection