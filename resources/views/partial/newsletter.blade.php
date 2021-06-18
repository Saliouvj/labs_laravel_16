<!-- newsletter section -->
<div class="newsletter-section spad">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h2>Newsletter</h2>
            </div>
            <div class="col-md-9">
                <!-- newsletter form -->
                <form class="nl-form" method="POST" action={{route('newsletterStore')}} role="form">
                    @csrf
                    <input type="email" placeholder="Your e-mail here" name="email" id="email" data-rule="email" data-msg="Please enter a valid email">
                    <button class="site-btn btn-2" type="submit">Newsletter</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- newsletter section end-->