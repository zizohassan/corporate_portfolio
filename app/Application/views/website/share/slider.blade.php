
<section id="main-slider" class="no-margin">
    <div class="carousel slide">
        <ol class="carousel-indicators">
            @foreach($sliders as $key => $slide)
                <li data-target="#main-slider" data-slide-to={{ $key }} class="{{ $loop->first ? 'active' : '' }}"></li>
            @endforeach
        </ol>
        <div class="carousel-inner">
            @foreach($sliders as $slider)
                 <div class="item {{ $loop->first ? 'active' : '' }}" style="background-image: url({{ url(env('UPLOAD_PATH').'/'.$slider->background_image) }})">
                <div class="container">
                    <div class="row slide-margin">
                        <div class="col-sm-6">
                            <div class="carousel-content">
                                <h1 class="animation animated-item-1">{{ getDefaultValueKey($slider->title) }}</h1>
                                <h2 class="animation animated-item-2">{{ getDefaultValueKey($slider->des) }}</h2>
                                <a class="btn-slide animation animated-item-3" href="{{ $slider->link }}">Read More</a>
                            </div>
                        </div>

                        <div class="col-sm-6 hidden-xs animation animated-item-4">
                            <div class="slider-img">
                                <img src="{{ url(env('UPLOAD_PATH').'/'.$slider->image) }}" class="img-responsive">
                            </div>
                        </div>

                    </div>
                </div>
            </div><!--/.item-->
            @endforeach
        </div><!--/.carousel-inner-->
    </div><!--/.carousel-->
    <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
        <i class="fa fa-chevron-left"></i>
    </a>
    <a class="next hidden-xs" href="#main-slider" data-slide="next">
        <i class="fa fa-chevron-right"></i>
    </a>
</section>