@extends('layout.admins')

@section('title',$title)

@section('content')

<div class="row-fluid">
    <div class="span12 box bordered-box orange-border" style="margin-bottom:0;">
        <div class="box-header purple-background">
            <div class="title">
                {{$title}}
            </div>
            <div class="actions">
                <a href="#" class="btn box-collapse btn-mini btn-link">
                </a>
            </div>
        </div>
        <div class="box-content box-no-padding">
            <div class="responsive-table">
                <div class="scrollable-area">
                    <table class="data-table-column-filter table table-bordered table-striped dataTable"
                    style="margin-bottom:0;" id="DataTables_Table_1" aria-describedby="DataTables_Table_1_info">
                        <thead>
                            <tr role="row">
                                <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1"
                                rowspan="1" colspan="1" aria-sort="ascending" aria-label="
                                Name
                                : activate to sort column descending" style="width: 299px;">
                                    ID
                                </th>
                                <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1"
                                rowspan="1" colspan="1" aria-label="
                                E-mail
                                : activate to sort column ascending" style="width: 386px;">
                                    一级类名
                                </th>
                                <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1"
                                rowspan="1" colspan="1" aria-label="
                                Status
                                : activate to sort column ascending" style="width: 162px;">
                                    状态
                                </th>
                                <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1"
                                rowspan="1" colspan="1" aria-label=": activate to sort column ascending"
                                style="width: 140px;">
                                操作
                                </th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th rowspan="1" colspan="1">
                                    <span class="filter_column filter_text">
                                        <input type="text" class="text_filter search_init" value="Name">
                                    </span>
                                </th>
                                <th rowspan="1" colspan="1">
                                    <span class="filter_column filter_text">
                                        <input type="text" class="text_filter search_init" value="E-mail">
                                    </span>
                                </th>
                                <th colspan="2" rowspan="1">
                                    <span class="filter_column filter_text">
                                        <input type="text" class="text_filter search_init" value="Status">
                                    </span>
                                </th>
                            </tr>
                        </tfoot>
                        <tbody role="alert" aria-live="polite" aria-relevant="all">

                            @foreach($res as $k => $v)
                            <tr class="even">
                                <td class="  sorting_1">
                                    {{$v->id}}
                                </td>
                                <td class=" ">
                                    {{$v->onetype}}
                                </td>
                                <td class=" ">
                                    @if($v->status==0)
                                    <span class="label label-important">
                                        下架
                                    </span>
                                    @else
                                    <span class="label label-success">
                                        上架
                                    </span>
                                    @endif
                                </td>
                                <td class=" ">
                                    <div class="text-right">
                                        <button class="btn btn-info" name="button"  type="submit">
                                            添加二级分类
                                        </button>
                                        <button class='btn btn-warning'>
                                            @if($v->status==0)
                                                上架
                                            @else
                                                下架
                                            @endif
                                        </button>
                                        <a class="btn btn-success" href="/admin/onetype/{{$v->id}}/edit">
                                            修改
                                        </a>
                                        <form action="/admin/onetype/{{$v->id}}" method='post' style='display:inline'>
                                            {{csrf_field()}}
                                            {{method_field("DELETE")}}
                                            <button class='btn btn-danger'>
                                                删除
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@stop