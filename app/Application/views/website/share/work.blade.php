
<section id="recent-works">
    <div class="container">
        <div class="center wow fadeInDown">
            <h2>Recent Works</h2>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
        </div>

        <div class="row">
            @foreach($product as $pro)
                <div class="col-xs-12 col-sm-4 col-md-3">
                <div class="recent-work-wrap">
                    <img class="img-responsive" src="{{ url(env('UPLOAD_PATH').'/'.$pro->image) }}" alt="">
                    <div class="overlay">
                        <div class="recent-work-inner">
                            <h3><a href="#">{{ getDefaultValueKey($pro->title) }}</a> </h3>
                            <p>
                                {{ getDefaultValueKey(str_limit($pro->des  ,100 )) }}
                            </p>
                            <a class="preview" href="{{ url('/product/'.$pro->id) }}" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div><!--/.row-->
    </div><!--/.container-->
</section>