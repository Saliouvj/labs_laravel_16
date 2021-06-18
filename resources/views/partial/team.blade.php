<!-- Team Section -->
<div class="team-section spad">
    <div class="overlay"></div>
    <div class="container">
        <div class="section-title">
            <h2>
                @php
                    $title1 = str_replace('(', '<span>', $title[3]->name);
                    $title2 = str_replace(')', '</span>', $title1);
                    echo $title2
                @endphp
            </h2>
        </div>
        <div class="row">
            <!-- single member -->
            <div class="col-sm-4">
                <div class="member">
                    <img src="img/{{$userRandom[0]->photo}}" alt="">
                    <h2>{{$userRandom[0]->firstname}} {{$userRandom[0]->name}}</h2>
                    <h3>{{$userRandom[0]->job->name}}</h3>
                </div>
            </div>
            <!-- CEO -->
            <div class="col-sm-4">
                <div class="member">
                    <img src="img/{{$centre[0]->photo}}" alt="">
                    <h2>{{$centre[0]->firstname}} {{$centre[0]->name}}</h2>
                    <h3>{{$centre[0]->job->name}}</h3>
                </div>
            </div>
            <!-- single member -->
            <div class="col-sm-4">
                <div class="member">
                    <img src="img/{{$userRandom[1]->photo}}" alt="">
                    <h2>{{$userRandom[1]->firstname}} {{$userRandom[1]->name}}</h2>
                    <h3>{{$userRandom[1]->job->name}}</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team Section end-->