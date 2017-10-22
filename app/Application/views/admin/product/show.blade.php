@extends(layoutExtend())

@section('title')
    {{ adminTrans('product' , 'product') }} {{ adminTrans('home' , 'view') }}
@endsection

@section('content')
    @component(layoutForm() , ['title' => adminTrans('product' , 'product') , 'model' => 'product' , 'action' => adminTrans('home' , 'view')  ])

        <table class="table table-bordered table-striped">
            @php
                $fields = rename_keys(
                     removeFromArray($data['fields'] , ['id' , 'created_at' , 'updated_at']) ,
                     [
                        adminTrans('product' , 'title'),
                        adminTrans('product' , 'des'),
            adminTrans('product' , 'Image'),
                        adminTrans('product' , 'Cat'),

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
                                @if($field == 'cat_id')
                                    <td>{{ getDefaultValueKey(\App\Application\Model\Categorie::find($item[$field])->name) }}</td>
                                @else
                                    <td>{!!  getDefaultValueKey(nl2br($item[$field]))  !!}</td>
                                @endif
                            @endif
                        </tr>
                    @endforeach
        </table>

        @include('admin.product.buttons.delete' , ['id' => $item->id])
        @include('admin.product.buttons.edit' , ['id' => $item->id])

    @endcomponent
@endsection
