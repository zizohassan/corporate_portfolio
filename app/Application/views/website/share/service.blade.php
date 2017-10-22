<section id="services" class="service-item">
    <div class="container">
        <div class="center wow fadeInDown">
            <h2>Our Service</h2>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
        </div>

        <div class="row">
            @foreach($Services as $service)
             <div class="col-sm-6 col-md-4">
                <div class="media services-wrap wow fadeInDown">
                    <div class="pull-left feature-wrap">
                        <i class="fa fa-{{ $service->icon }}"></i>
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">{{ getDefaultValueKey($service->title) }}</h3>
                        <p>{{ strip_tags(getDefaultValueKey(str_limit($service->des , 100))) }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div><!--/.row-->
    </div><!--/.container-->
</section>