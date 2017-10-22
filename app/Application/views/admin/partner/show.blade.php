@extends(layoutExtend())

@section('title')
    {{ adminTrans('partner' , 'partner') }} {{ adminTrans('home' , 'view') }}
@endsection

@section('content')
    @component(layoutForm() , ['title' => adminTrans('partner' , 'partner') , 'model' => 'partner' , 'action' => adminTrans('home' , 'view')  ])
        <table class="table table-bordered  table-striped">
            @php
                $fields = rename_keys(
                     removeFromArray($data['fields'] , ['id' , 'created_at' , 'updated_at']) ,
                     [
                        adminTrans('partner' , 'title')
            , adminTrans('partner' , 'image')
            ]
                );
            @endphp
                 @foreach($fields as $key =>  $field)
                        <tr>
                            <th>{{ $key }}</th>
                            @php $type =  getFileType($field , $item[$field]) @endphp
                            @if($type == 'File')
                                <td> <a href="{{ url(env('UPLOAD_PATH').'/'.$item[$field]) }}">{{ $item[$field] }}</a></td>
                            @elseif($type == 'Image')
                                <td> <img src="{{ url(env('UPLOAD_PATH').'/'.$item[$field]) }}"  width="300"/></td>
                            @else
                                 <td>{!!  nl2br($item[$field])  !!}</td>
                            @endif
                        </tr>
                    @endforeach
        </table>

        @include('admin.partner.buttons.delete' , ['id' => $item->id])
        @include('admin.partner.buttons.edit' , ['id' => $item->id])

    @endcomponent
@endsection
