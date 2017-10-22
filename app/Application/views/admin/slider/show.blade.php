@extends(layoutExtend())

@section('title')
    {{ adminTrans('slider' , 'slider') }} {{ adminTrans('home' , 'view') }}
@endsection

@section('content')
    @component(layoutForm() , ['title' => adminTrans('slider' , 'slider') , 'model' => 'slider' , 'action' => adminTrans('home' , 'view')  ])

        <table class="table table-bordered  table-striped">
            @php
                $fields = rename_keys(
                     removeFromArray($data['fields'] , ['id' , 'created_at' ,'updated_at' ]) ,
                     ['title' , 'des' , 'image'  , 'background Image' , 'link']
                );
            @endphp
                 @foreach($fields as $key =>  $field)
                        <tr>
                            <th>{{ $key }}</th>
                            @php $type =  getFileType($field , $item[$field]) @endphp
                            @if($type == 'File')
                                <td> <a href="{{ url(env('UPLOAD_PATH').'/'.$item[$field]) }}">{{ $item[$field] }}</a></td>
                            @elseif($type == 'Image')
                                <td> <img src="{{ url(env('UPLOAD_PATH').'/'.$item[$field]) }}" width="300" /></td>
                            @else
                                 <td>{!!  getDefaultValueKey(nl2br($item[$field]))  !!}</td>
                            @endif
                        </tr>
                    @endforeach
        </table>

        @include('admin.slider.buttons.delete' , ['id' => $item->id])
        @include('admin.slider.buttons.edit' , ['id' => $item->id])

    @endcomponent
@endsection
