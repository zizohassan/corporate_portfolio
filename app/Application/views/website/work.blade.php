@extends('layouts.app')

@section('content')
    <section id="portfolio">
        <div class="container">
            <div class="center">
                <h2>Portfolio</h2>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>


            <ul class="portfolio-filter text-center">
                <li><a class="btn btn-default active" href="#" data-filter="*">All Works</a></li>
                @foreach($cat as $c)
                    <li><a class="btn btn-default" href="#" data-filter=".cat{{$c->id}}">{{ getDefaultValueKey($c->name) }}</a></li>
                @endforeach
            </ul><!--/#portfolio-filter-->

            <div class="row">
                <div class="portfolio-items">
                    @foreach($product as $pro)
                        <div class="portfolio-item {{ 'cat'.$pro->cat_id }} apps col-xs-12 col-sm-4 col-md-3">
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
                </div>
            </div>
        </div>
    </section><!--/#portfolio-item-->
@endsection
