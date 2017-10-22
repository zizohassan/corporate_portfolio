@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
                   <h1 style="color: #000;">
                       {{ getDefaultValueKey($page->title) }}
                   </h1>
                    <p>
                        {!!   getDefaultValueKey($page->body) !!}
              </p>
        </div>
    </div>
</div>
@endsection
