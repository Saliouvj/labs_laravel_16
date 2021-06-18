<!-- Intro Section -->
<div class="hero-section">
    <div class="hero-content">
        <div class="hero-center">
            <img src="img/{{$logo->name}}" alt="">
            <p>Get your freebie template now!</p>
        </div>
    </div>

    <!-- slider -->
    <div id="hero-slider" class="owl-carousel">


        @forelse ($imactive as $ima)
            <div class="item  hero-item" data-bg="img/{{$ima->name}}"></div>
        @empty
            
        @endforelse
        @foreach ($images as $image)
            <div class="item  hero-item" data-bg="img/{{$image->name}}"></div>
        @endforeach
    </div>
</div>
<!-- Intro Section -->