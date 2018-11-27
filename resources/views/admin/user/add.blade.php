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

     <form class="form form-horizontal validate-form" style="margin-bottom: 0;" novalidate="novalidate" action="/admin/user" method="post" enctype='multipart/form-data'>
            <div class="control-group">
                <label class="control-label" for="validation_name">用户名</label>
                <div class="controls">
                    <input id="validation_name" name="username" placeholder="Name" type="text">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="validation_password">密码</label>
                <div class="controls">
                    <input id="validation_password" name="password" placeholder="Password" type="password">
                </div>
            </div>
             <div class="control-group">
                <label class="control-label" for="validation_name">邮箱</label>
                <div class="controls">
                    <input id="validation_name" name="email" placeholder="Email" type="text">
                </div>
            </div>

            <div class="control-group">
                <label class="control-label" for="validation_name">电话</label>
                <div class="controls">
                    <input id="validation_name" name="phone" placeholder="请输入手机号码" type="text">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="validation_name">性别</label>
                <div class="controls">
                    <input  id="validation_name" name="sex" placeholder="Name" type="radio" value="1">男
                    <input  id="validation_name" name="sex" placeholder="Name" type="radio" value="2">女
                    <input  id="validation_name" name="sex" placeholder="Name" type="radio" value="3">保密
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="validation_name">地址</label>
                <div class="controls">
                    <input  id="validation_name" name="address" placeholder="address " type="text">
                </div>
            </div>
             <div class="control-group">
                <label class="control-label" for="validation_name">头像</label>
                 <div>
                <a class="file-input-wrapper btn"> <input title="点击此处选择图片" type="file" style="left: -131.949px; top: -4.27687px;" name="photo"></a>
            </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="validation_agree">权限</label>
                <div class="controls">
                    <label class="checkbox">
                        <input  id="validation_agree" name="status" type="radio" value="0">后台管理员
                        <input  id="validation_agree" name="status" type="radio" value="1">普通用户
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
@section('js')
<script>
    $('.alert-success').delay(2000).fadeOut(2000);
    $('.alert-error').delay(2000).fadeOut(2000);
    $('.alert-warning').delay(2000).fadeOut(2000);
</script>
@stop