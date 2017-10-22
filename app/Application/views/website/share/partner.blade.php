
<section id="partner">
    <div class="container">
        <div class="center wow fadeInDown">
            <h2>Our Partners</h2>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
        </div>

        <div class="partners">
            <ul>
                @foreach($partner as $part)
                    <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" src="{{ url(env('UPLOAD_PATH').'/'.$part->image) }}"></a></li>
                @endforeach
            </ul>
        </div>
    </div><!--/.container-->
</section>