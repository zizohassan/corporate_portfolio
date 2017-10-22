@extends(layoutExtend())

@section('title')
     {{ adminTrans('testimonial' , 'testimonial') }} {{ adminTrans('home' , 'control') }}
@endsection

@section('style')
    @include('admin.shared.style')
@endsection

@section('content')
    @include(layoutTable() , ['title' => adminTrans('testimonial' , 'testimonial') , 'model' => 'testimonial' , 'table' => $dataTable->table([] , true) ])
@endsection

@section('script')
    @include('admin.shared.scripts')
@endsection