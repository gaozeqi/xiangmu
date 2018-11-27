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
                                E-mail
                                : activate to sort column ascending" style="width: 386px;">
                                    二级类名
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

                            @foreach($path as $k => $v)
                            <tr class="even">
                                <td class="  sorting_1">
                                    {{$v->id}}
                                </td>
                                <td class=" ">
                                    @foreach($res as $key => $val)
                                        @if($val->id == $v->oid)
                                            {{$val->onetype}}
                                        @endif
                                    @endforeach
                                </td>
                                <td class=" ">
                                    {{$v->twotype}}
                                </td>
                                <td class="sta-spa">
                                    @if($v->status==0)
                                    <span class="label label-important" va="{{$v->status}}">
                                        下架
                                    </span>
                                    @else
                                    <span class="label label-success" va="{{$v->status}}">
                                        上架
                                    </span>
                                    @endif
                                </td>
                                <td class=" ">
                                    <div class="text-right">
                                        <button class="btn btn-info" name="button"  type="submit">
                                            添加三级分类
                                        </button>
                                        <button class='btn btn-warning sta-ajax'>
                                            @if($v->status==0)
                                                上架
                                            @else
                                                下架
                                            @endif
                                        </button>
                                        <a class="btn btn-success" href="/admin/twotype/{{$v->id}}/edit">
                                            修改
                                        </a>
                                        <form action="/admin/twotype/{{$v->id}}" method='post' style='display:inline'>
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
@section('js')
<script>
    $('.sta-ajax').click(function(){
        var th = $(this);
        var ysta = $(this).text();
        var ids = $(this).parents('tr').find('td').eq(0).text().trim();
        var spans = $(this).parents('tr').find('td').eq(3);
        var sta = spans.find('span').eq(0).attr('va').trim();
        console.log(ysta,ids,sta);
        $.get('/admin/twostajax',{sta:sta,ids:ids},function(data){
            console.log(data);
            if(data == 1){
                //让输入框消失  但是输入框里面的值留下
                var ipu = $('<span class="label label-success" va="1">上架</span>');
                spans.empty();
                spans.append(ipu);
                th.text('下架');
            }else if(data == 0 ){
                var ipu = $('<span class="label label-important" va="0">下架</span>');
                spans.empty();
                spans.append(ipu);
                th.text('上架');
            }else{
                return;
            }
        })
    })
</script>
@stop