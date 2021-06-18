<!-- Services section -->
<div class="services-section spad">
    <div class="container">
        <div class="section-title dark">
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
            @foreach ($services9 as $service)  
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
        <div class="text-center">
            <a href="{{route('services')}}" class="site-btn">Browse</a>
        </div>
    </div>
</div>
<!-- services section end -->