@extends('layout.admins')

@section('title',$title)

@section('content')
<table class="data-table table table-bordered table-striped dataTable"
style="margin-bottom:0;" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info">
    <!-- 表单头 -->
    <thead>
        <tr role="row">
            <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0"
            rowspan="1" colspan="1" aria-sort="ascending" aria-label="
            ID
            : activate to sort column descending" style="width: 449px;">
                ID
            </th>
            <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0"
            rowspan="1" colspan="1" aria-sort="ascending" aria-label="
            Name
            : activate to sort column descending" style="width: 449px;">
                链接名
            </th>
            <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0"
            rowspan="1" colspan="1" aria-sort="ascending" aria-label="
            Name
            : activate to sort column descending" style="width: 449px;">
               URL
            </th>

            <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0"
            rowspan="1" colspan="1" aria-label="
            E-mail
            : activate to sort column ascending" style="width: 543.048px;">
               操作
            </th>
        </tr>
    </thead>

    <!-- 表单内部 -->
    <tbody role="alert" aria-live="polite" aria-relevant="all">
        @foreach($res as $k => $v)

                    @if($k % 2 == 0)
                        <tr class="odd">
                    @else
                        <tr class="even">
                    @endif
            <td class="">
                {{$v->fid}}
            </td>
            <td class="">
                 {{$v->fname}}
            </td>
            <td class="">
                 {{$v->url}}
            </td>
            <td class=" ">
            <a href="/admin/friend/{{$v->fid}}/edit" class='btn btn-info'>修改</a>

            <form action="/admin/friend/{{$v->fid}}" method='post' style='display:inline'>
                {{csrf_field()}}

                {{method_field("DELETE")}}
                <button class='btn btn-danger'>删除</button>

            </form>
        </td>
        </tr>
     @endforeach
    </tbody>
</table>
@stop
@section('js')
<script>
      $('.alert-success').delay(2000).fadeOut(2000);
    $('.alert-error').delay(2000).fadeOut(2000);
    $('.alert-warning').delay(2000).fadeOut(2000);
</script>
@stop

