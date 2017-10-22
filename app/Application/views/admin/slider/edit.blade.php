@extends(layoutExtend())

@section('title')
    {{ adminTrans('slider' , 'slider') }} {{  isset($item) ? adminTrans('home' , 'edit')  : adminTrans('home' , 'add')  }}
@endsection

@section('content')
    @component(layoutForm() , ['title' => adminTrans('slider' , 'slider') , 'model' => 'slider' , 'action' => isset($item) ? adminTrans('home' , 'edit')  : adminTrans('home' , 'add')  ])
         @include(layoutMessage())
        <form action="{{ concatenateLangToUrl('admin/slider/item') }}{{ isset($item) ? '/'.$item->id : '' }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}

            {!! extractFiled('title' , isset($item->title) ? $item->title : null) !!}

            {!! extractFiled('des' , isset($item->des) ? $item->des : old('des') , 'textarea' , 'slider' , 'tinymce' ) !!}

            <div class="form-group">
                <div class="form-line">
                    <label for="">{{ adminTrans('slider' , 'image') }}</label>
                    @if(isset($item) && $item->image != '')
                        <img src="{{ url('/'.env('UPLOAD_PATH').'/'.$item->image) }}" class=" thumbnail "  width="300" alt="">
                        <br>
                    @endif
                    <input type="file" name="image" class="" {{ !isset($item) ? "required='required'" : '' }}>
                </div>
            </div>

            <div class="form-group">
                <div class="form-line">
                    <label for="">{{ adminTrans('slider' , 'background_image') }}</label>
                    @if(isset($item) && $item->background_image != '')
                        <img src="{{ url('/'.env('UPLOAD_PATH').'/'.$item->background_image) }}" class=" thumbnail "  width="300" alt="">
                        <br>
                    @endif
                    <input type="file" name="background_image" class="" {{ !isset($item) ? "required='required'" : '' }}>
                </div>
            </div>


            <div class="form-group">
                <div class="form-line">
                    <input type="text" name="link" id="link" placeholder="{{ adminTrans('slider' , 'link') }}" class="form-control" value="{{ isset($item) ? $item->link : old('link') }}"/>
                </div>
            </div>

            <div class="form-group">
                <button type="submit" name="submit" class="btn btn-default" >
                    <i class="material-icons">check_circle</i>
                    {{ adminTrans('home' ,'save') }}  {{ adminTrans('slider' , 'slider') }}
                </button>
            </div>
        </form>
    @endcomponent
@endsection
