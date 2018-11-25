@extends('layout.admins')

@section('title',$title)

@section('content')
     <form class="form form-horizontal validate-form" style="margin-bottom: 0;" novalidate="novalidate" action="/admin/onetype" method="post" enctype='multipart/form-data'>
            <div class="control-group">
                <label class="control-label" for="validation_name">一级类别名：</label>
                <div class="controls">
                    <input  id="validation_name" name="onetype" placeholder="一级类别名字" type="text">
                </div>
            </div>

            <div class="control-group">
                <label class="control-label" for="validation_agree">状态：</label>
                <div class="controls">
                    <label class="checkbox">
                        <input data-rule-required="true" id="validation_agree" name="status" type="radio" value="1">上架&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input data-rule-required="true" id="validation_agree" name="status" type="radio" value="0">下架
                    </label>
                </div>
            </div>

            <div class="form-actions" style="margin-bottom:0">
               {{csrf_field()}}
                <button class="btn btn-primary" type="submit">
                    <i class="icon-save">保存</i>
                </button>
            </div>
   </form>

@stop