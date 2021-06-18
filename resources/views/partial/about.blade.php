<!-- About section -->
<div class="about-section">
    <div class="overlay"></div>
    <!-- card section -->
    <div class="card-section">
        <div class="container">
            <div class="row">
                <!-- single card -->
                @foreach ($services3 as $service)
                    @if ($loop->iteration == 3)
                        <div class="col-md-4 col-sm-12">
                    @else
                        <div class="col-md-4 col-sm-6">
                    @endif
                            <div class="lab-card">
                                <div class="icon">
                                    <i class="{{$service->icon->name}}"></i>
                                </div>
                                <h2>{{$service->title}}</h2>
                                <p>{{$service->text}}</p>
                            </div>
                        </div>
                @endforeach 
            </div>
        </div>
    </div>
    <!-- card section end-->


    <!-- About contant -->
    <div class="about-contant">
        <div class="container">
            <div class="section-title">
                <h2>
                    @php
                        $title1 = str_replace('(', '<span>', $title[0]->name);
                        $title2 = str_replace(')', '</span>', $title1);
                        echo $title2
                    @endphp
                </h2>
            </div>

            <!-- Discover Text Left & Right -->
            <div class="row">
                <div class="col-md-6">
                    <p>{{$discover->textLeft}}</p>
                </div>
                <div class="col-md-6">
                    <p>{{$discover->textRight}}</p>
                </div>
            </div>
            <div class="text-center mt60">
                <a href="{{route('services')}}" class="site-btn">Browse</a>
            </div>
            
            <!-- popup video -->
            <div class="intro-video">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <img src="img/video.jpg" alt="">
                        <a href="{{$video->link}}" class="video-popup">
                            <i class="fa fa-play"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About section end -->