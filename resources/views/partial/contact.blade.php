<!-- Contact section -->
<div class="contact-section spad fix">
    <div class="container">
        <div class="row">
            <!-- contact info -->
            <div class="col-md-5 col-md-offset-1 contact-info col-push">
                <div class="section-title left">
                    <h2>Contact us</h2>
                </div>
                <p>{{$contact->description}}</p>
                <h3 class="mt60">Main Office</h3>
                <p class="con-item">{{$contact->street}}<br> {{$contact->postcode}} {{$contact->city}} </p>
                <p class="con-item">{{$contact->phone}}</p>
                <p class="con-item">{{$contact->email}}</p>
            </div>
            <!-- contact form -->
            <div class="col-md-6 col-pull">
                <form class="form-class" id="con_form" method="POST" action="{{route('mail-contact')}}">
                    @csrf

                    <div class="row">
                        <div class="col-sm-6">
                            <!-- Name -->
                            <input type="text" name="name" id="name" placeholder="Your name">
                        </div>
                        <div class="col-sm-6">
                            <!-- E-mail -->
                            @guest
                                <input type="email" name="mail" id="mail" placeholder="Your email">
                            @endguest
                            @auth
                                <input type="email" name="mail" id="mail" placeholder="Your email" >
                            @endauth
                        </div>
                        <div class="col-sm-12">

                            <!-- Subject -->
                            {{-- <input type="text" name="subject" id="subject" placeholder="Subject"> --}}
                            <select id="subject" name="subject" placeholder="Subject">
                                @foreach ($subjects as $subject)
                                    <option value="{{$subject->name}}">{{$subject->name}}</option>
                                @endforeach
                            </select>

                            <!-- Message -->
                            <textarea name="message" placeholder="Message"></textarea>

                            <button class="site-btn" type="submit">send</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Contact section end-->