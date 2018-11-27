@extends('layout.admins')

@section('title',$title)

@section('content')
 <!-- 添加用户的报错 -->
     @if (count($errors) > 0)
          <div class="alert alert-warning">
         <a href="#" class="close" data-dismiss="alert"><font id="WOW_TRANSLATE_371" class="WOW_TRANSLATE_STYLE" data--w-o-w_-i-n-d-e-x="371">×</font></a>
         <h4>
             <i class="icon-exclamation-sign"></i><font id="WOW_TRANSLATE_372" class="WOW_TRANSLATE_STYLE" data--w-o-w_-i-n-d-e-x="372">警告</font></h4>
              @foreach ($errors->all() as $error)
             <font id="WOW_TRANSLATE_373" class="WOW_TRANSLATE_STYLE" data--w-o-w_-i-n-d-e-x="373"><ul><li>{{$error}}</li></ul></font>
             @endforeach
        </div>
     @endif
     <form class="form form-horizontal validate-form" style="margin-bottom: 0;" novalidate="novalidate" action="/admin/friend/{{$res->fid}}" method="post" enctype='multipart/form-data'>
            <div class="control-group">
                <label class="control-label" for="validation_name">链接名</label>
                <div class="controls">
                    <input id="validation_name" name="fname" placeholder="Name" type="text" value='{{$res->fname}}''>
                </div>

            </div>
             <div class="control-group">
                <label class="control-label" for="validation_name">url</label>
                <div class="controls">
                    <input id="validation_name" name="url" placeholder="Email" type="text" value='{{$res->url}}''>
                </div>
            </div>
            <div class="form-actions" style="margin-bottom:0">
            	{{csrf_field()}}

                    {{method_field('PUT')}}
                <button class="btn btn-primary" type="submit">
                    <i class="icon-save">修改</i>
                </button>
            </div>
   </form>





@stop
@section('js')
<script>
      $('.alert-success').delay(2000).fadeOut(2000);
    $('.alert-error').delay(2000).fadeOut(2000);
    $('.alert-warning').delay(2000).fadeOut(2000);
</script>

@stop