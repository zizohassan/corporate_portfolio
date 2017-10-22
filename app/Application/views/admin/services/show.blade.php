@extends(layoutExtend())

@section('title')
    {{ adminTrans('services' , 'services') }} {{ adminTrans('home' , 'view') }}
@endsection

@section('content')
    @component(layoutForm() , ['title' => adminTrans('services' , 'services') , 'model' => 'services' , 'action' => adminTrans('home' , 'view')  ])

        <table class="table table-bordered  table-striped">
            @php
                $fields = rename_keys(
                     removeFromArray($data['fields'] , ['id' , 'created_at' , 'updated_at']) ,
                     [
                        adminTrans('services' , 'title'),
                        adminTrans('services' , 'des'),
                        adminTrans('services' , 'icon'),
                        ]
                );
            @endphp
                 @foreach($fields as $key =>  $field)
                        <tr>
                            <th>{{ $key }}</th>
                            @if($field == 'icon')
                                 <td>{!!  nl2br($item[$field])  !!}</td>
                            @else
                                <td>{!!  getDefaultValueKey($item[$field])  !!}</td>
                            @endif
                        </tr>
                    @endforeach
        </table>

        @include('admin.services.buttons.delete' , ['id' => $item->id])
        @include('admin.services.buttons.edit' , ['id' => $item->id])

    @endcomponent
@endsection
