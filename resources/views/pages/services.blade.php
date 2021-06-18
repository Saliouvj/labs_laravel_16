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
            <li class="active"><a href="{{route('services')}}">Services</a></li>
            <li><a href="{{route('blog')}}">Blog</a></li>
            <li><a href="{{route('contact')}}">Contact</a></li>
        </ul>
    </nav>
</header>
<!-- Header section end -->


<!-- Page header -->
<div class="page-top-section">
    <div class="overlay"></div>
    <div class="container text-right">
        <div class="page-info">
            <h2>Services</h2>
            <div class="page-links">
                <a href="#">Home</a>
                <span>Services</span>
            </div>
        </div>
    </div>
</div>
<!-- Page header end-->


<!-- services section -->
<div class="services-section spad">
    <div class="container">
        <div class="section-title dark" id="servicePaginate">
            <h2>
                @php
                    $title1 = str_replace('(', '<span>', $title[2]->name);
                    $title2 = str_replace(')', '</span>', $title1);
                    echo $title2
                @endphp
            </h2>
        </div>
        <div class="row">
            <!-- single service -->
            @foreach($services->reverse() as $service)
            <div class="col-md-4 col-sm-6">
                <div class="service">
                    <div class="icon">
                        <i class="{{$service->icon->name}}"></i>
                    </div>
                    <div class="service-text">
                        <h2>{{$service->title}}</h2>
                        <p>{{$service->text}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="col-12 d-flex justify-content-center paginationServices">
            {{-- {{$services->links()}} --}}
            {{ $services->links('vendor.pagination.default') }}
        </div>
    </div>
</div>
<!-- services section end -->


<!-- features section -->
<div class="team-section spad">
    <div class="overlay"></div>
    <div class="container">
        <div class="section-title">
            <h2>
                @php
                    $title1 = str_replace('(', '<span>', $title[4]->name);
                    $title2 = str_replace(')', '</span>', $title1);
                    echo $title2
                @endphp
            </h2>
        </div>
        <div class="row">
            <!-- feature item LEFT -->
            <div class="col-md-4 col-sm-4 features">
                @foreach ($featuresLeft as $fLeft)  
                <div class="icon-box light left">
                    <div class="service-text">
                        <h2>{{$fLeft->title}}</h2>
                        <p>{{$fLeft->text}}</p>
                    </div>
                    <div class="icon">
                        <i class="{{$fLeft->icon->name}}"></i>
                    </div>
                </div>
                @endforeach
            </div>
            <!-- Devices -->
            <div class="col-md-4 col-sm-4 devices">
                <div class="text-center">
                    <img src="img/device.png" alt="">
                </div>
            </div>
            <!-- feature item RIGHT -->
            <div class="col-md-4 col-sm-4 features">
                @foreach ($featuresRight as $fRight)
                <div class="icon-box light">
                    <div class="icon">
                        <i class="{{$fRight->icon->name}}"></i>
                    </div>
                    <div class="service-text">
                        <h2>{{$fRight->title}}</h2>
                        <p>{{$fRight->text}}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="text-center mt100">
            <a href="" class="site-btn">Browse</a>
        </div>
    </div>
</div>
<!-- features section end-->


<!-- services card section-->
<div class="services-card-section spad">
    <div class="container">
        <div class="row">
            <!-- Single Card -->
            @foreach ($posts3 as $post) 
            <div class="col-md-4 col-sm-6">
                <div class="sv-card">
                    <div class="card-img">
                        <img src="img/{{$post->image}}" alt="">
                    </div>
                    <div class="card-text">
                        <h2>{{$post->title}}</h2>
                        <p>{{$post->text}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- services card section end-->

@include('partial.newsletter')
@include('partial.contact')
    
@endsection