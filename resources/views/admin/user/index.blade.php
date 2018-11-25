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
                名字
            </th>

            <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0"
            rowspan="1" colspan="1" aria-label="
            E-mail
            : activate to sort column ascending" style="width: 543.048px;">
                手机号
            </th>
            <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0"
            rowspan="1" colspan="1" aria-label="
            Status
            : activate to sort column ascending" style="width: 247.048px;">
                性别
            </th>
             <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0"
            rowspan="1" colspan="1" aria-label="
            Status
            : activate to sort column ascending" style="width: 247.048px;">
                住址
            </th>
             <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0"
            rowspan="1" colspan="1" aria-label="
            Status
            : activate to sort column ascending" style="width: 247.048px;">
                邮箱
            </th>
             <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0"
            rowspan="1" colspan="1" aria-label="
            Status
            : activate to sort column ascending" style="width: 247.048px;">
                头像
            </th>
             <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0"
            rowspan="1" colspan="1" aria-label="
            Status
            : activate to sort column ascending" style="width: 247.048px;">
            权限
            </th>
            <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0"
            rowspan="1" colspan="1" aria-label=": activate to sort column ascending"
            style="width: 209.048px;">
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
                {{$v->uid}}
            </td>
            <td class="">
                 {{$v->username}}
            </td>
            <td class="">
                {{$v->phone}}
            </td>
            <td class="">
                @if($v->status== 1)

                    男
                @elseif($v->status== 2)
                    女

                @else
                    保密

                @endif
            </td>
            <td class="">
                {{$v->address}}
            </td>

            <td class=" ">
                {{$v->email}}
            </td>
            <td class=" ">
                <img src="{{$v->photo}}" alt="" width="50" height="50">
            </td>
            <td class=" ">
                <span class="label label-warning">
                @if($v->status== 0)

                    管理员
                @else
                    普通用户

                @endif
                </span>
            </td>
            <td class=" ">
                            <a href="/admin/user/{{$v->uid}}/edit" class='btn btn-info'>修改</a>

                            <form action="/admin/user/{{$v->uid}}" method='post' style='display:inline'>
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

