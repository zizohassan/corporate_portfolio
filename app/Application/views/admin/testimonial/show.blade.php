@extends(layoutExtend())

@section('title')
    {{ adminTrans('testimonial' , 'testimonial') }} {{ adminTrans('home' , 'view') }}
@endsection

@section('content')
    @component(layoutForm() , ['title' => adminTrans('testimonial' , 'testimonial') , 'model' => 'testimonial' , 'action' => adminTrans('home' , 'view')  ])

        <table class="table table-bordered  table-striped">
            @php
                $fields = rename_keys(
                     removeFromArray($data['fields'] , ['id' , 'created_at' , 'updated_at']) ,
                     [
                        adminTrans('testimonial' , 'title'),
                    adminTrans('testimonial' , 'des'),
                        adminTrans('testimonial' , 'image'),
                        adminTrans('testimonial' , 'postions'),
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

        @include('admin.testimonial.buttons.delete' , ['id' => $item->id])
        @include('admin.testimonial.buttons.edit' , ['id' => $item->id])

    @endcomponent
@endsection
