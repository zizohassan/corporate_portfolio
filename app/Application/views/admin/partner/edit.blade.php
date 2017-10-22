@extends(layoutExtend())

@section('title')
    {{ adminTrans('partner' , 'partner') }} {{  isset($item) ? adminTrans('home' , 'edit')  : adminTrans('home' , 'add')  }}
@endsection

@section('content')
    @component(layoutForm() , ['title' => adminTrans('partner' , 'partner') , 'model' => 'partner' , 'action' => isset($item) ? adminTrans('home' , 'edit')  : adminTrans('home' , 'add')  ])
         @include(layoutMessage())
        <form action="{{ concatenateLangToUrl('admin/partner/item') }}{{ isset($item) ? '/'.$item->id : '' }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}


            <div class="form-group">
                <div class="form-line">
                    <input type="text" name="title" id="title" placeholder="{{ adminTrans('partner' , 'title') }}" class="form-control" value="{{ isset($item) ? $item->title : old('title') }}"/>
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

            <div class="form-group">
                <button type="submit" name="submit" class="btn btn-default" >
                    <i class="material-icons">check_circle</i>
                    {{ adminTrans('home' ,'save') }}  {{ adminTrans('partner' , 'partner') }}
                </button>
            </div>
        </form>
    @endcomponent
@endsection
