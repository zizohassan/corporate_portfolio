@extends(layoutExtend())

@section('title')
    {{ adminTrans('services' , 'services') }} {{  isset($item) ? adminTrans('home' , 'edit')  : adminTrans('home' , 'add')  }}
@endsection

@section('content')
    @component(layoutForm() , ['title' => adminTrans('services' , 'services') , 'model' => 'services' , 'action' => isset($item) ? adminTrans('home' , 'edit')  : adminTrans('home' , 'add')  ])
         @include(layoutMessage())
        <form action="{{ concatenateLangToUrl('admin/services/item') }}{{ isset($item) ? '/'.$item->id : '' }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}

            {!! extractFiled('title' , isset($item->title) ? $item->title : null) !!}

            <div class="form-group">
                <div class="form-line">
                    <input type="text" name="icon" id="icon" placeholder="{{ adminTrans('services' , 'icon') }}" class="form-control" value="{{ isset($item) ? $item->icon : old('icon') }}"/>
                </div>
            </div>

            {!! extractFiled('des' , isset($item->des) ? $item->des : old('des') , 'textarea' , 'services' , 'tinymce' ) !!}

            <div class="form-group">
                <button type="submit" name="submit" class="btn btn-default" >
                    <i class="material-icons">check_circle</i>
                    {{ adminTrans('home' ,'save') }}  {{ adminTrans('services' , 'services') }}
                </button>
            </div>
        </form>
    @endcomponent
@endsection

@section('script')
    @include(layoutPath('layout.helpers.tynic'))
    {{ Html::script('/admin/plugins/momentjs/moment.js') }}
    {{ Html::script('/admin/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js') }}
    <script>
        $('.datepicker').bootstrapMaterialDatePicker({
            time:false,
            format:"L",
            setDate:"{{ date('d/m/Y')  }}",
            nowButton:true
        });
    </script>
@endsection
