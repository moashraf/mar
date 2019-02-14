<table class="table table-responsive" id="categoriesNews-table">
    <thead>
        <tr>
         <th>Single Photo</th>
        <th>created_at</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($categoriesNews as $categoriesNews)
        <tr>
    <td>     <img src="{{ URL::to('/').'/images/'.$categoriesNews->single_photo}}"  width="50" height="50">  </td>

            <td>{!! $categoriesNews->created_at !!}</td>
            <td>
                {!! Form::open(['route' => ['categoriesNews.destroy', $categoriesNews->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('categoriesNews.show', [$categoriesNews->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('categoriesNews.edit', [$categoriesNews->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>