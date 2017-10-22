

<section id="content">
    <div class="container">
        <div class="row ">
            <div class="text-center">
                <h2>Testimonials</h2>
            </div>
            @foreach($test as $t)
                 <div class="col-xs-12 col-sm-6 wow fadeInDown">
                <div class="testimonial">
                    <div class="media testimonial-inner">
                        <div class="pull-left">
                            <img class="img-responsive img-circle" src="{{ url(env('UPLOAD_PATH').'/'.$t->image) }}" width="100">
                        </div>
                        <div class="media-body">
                            <p>{{ $t->des }}</p>
                            <span><strong>-{{ $t->title }}/</strong> {{ $t->position }}</span>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div><!--/.row-->
    </div><!--/.container-->
</section>