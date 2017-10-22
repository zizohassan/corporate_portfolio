@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <br>
                <div class="center wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">
                    <h2>Our Services</h2>
                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
                </div>
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
            </div>
        </div>
    </div>
@endsection
