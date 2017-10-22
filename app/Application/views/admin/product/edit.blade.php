@extends(layoutExtend())

@section('title')
    {{ adminTrans('product' , 'product') }} {{  isset($item) ? adminTrans('home' , 'edit')  : adminTrans('home' , 'add')  }}
@endsection

@section('content')
    @component(layoutForm() , ['title' => adminTrans('product' , 'product') , 'model' => 'product' , 'action' => isset($item) ? adminTrans('home' , 'edit')  : adminTrans('home' , 'add')  ])
         @include(layoutMessage())
        <form action="{{ concatenateLangToUrl('admin/product/item') }}{{ isset($item) ? '/'.$item->id : '' }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}

            {!! extractFiled('title' , isset($item->title) ? $item->title : null) !!}


            <div class="form-group">
                <div class="">
                    @php $cats = isset($item) && $item->cat_id != 0 ? $item->cat_id : null @endphp
                    <label for="">{{ adminTrans('product' , 'cat_id') }} </label>
                    {!! Form::select('cat_id' , $data['cat_id'] , $cats , ['class' => 'form-control'] ) !!}
                </div>
            </div>

            <div class="form-group">
                <div class="form-line">
                    <label for="">{{ adminTrans('page' , 'image') }}</label>
                    @if(isset($item) && $item->image != '')
                        <img src="{{ url('/'.env('UPLOAD_PATH').'/'.$item->image) }}" class="img-responsive thumbnail "  width="300" alt="">
                        <br>
                    @endif
                    <input type="file" name="image" class="" {{ !isset($item) ? "required='required'" : '' }}>
                </div>
            </div>

            {!! extractFiled('des' , isset($item->des) ? $item->des : old('des') , 'textarea' , 'services' , 'tinymce' ) !!}


            <div class="form-group">
                <button type="submit" name="submit" class="btn btn-default" >
                    <i class="material-icons">check_circle</i>
                    {{ adminTrans('home' ,'save') }}  {{ adminTrans('product' , 'product') }}
                </button>
            </div>
        </form>
    @endcomponent
@endsection
