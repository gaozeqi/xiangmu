@extends('layout.admins')

@section('title',$title)

@section('content')
     <form class="form form-horizontal validate-form" style="margin-bottom: 0;" novalidate="novalidate" action="/admin/user" method="post" enctype='multipart/form-data'>
            <div class="control-group">
                <label class="control-label" for="validation_name">用户名</label>
                <div class="controls">
                    <input  id="validation_name" name="username" placeholder="Name" type="text">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="validation_password">密码</label>
                <div class="controls">
                    <input data-rule-minlength="6" data-rule-password="true" data-rule-required="true" id="validation_password" name="password" placeholder="Password" type="password">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="validation_agree">权限</label>
                <div class="controls">
                    <label class="checkbox">
                        <input data-rule-required="true" id="validation_agree" name="status" type="radio" value="0">后台管理员
                        <input data-rule-required="true" id="validation_agree" name="status" type="radio" value="1">普通用户
                    </label>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="validation_name">电话</label>
                <div class="controls">
                    <input data-rule-minlength="13" data-rule-required="true" id="validation_name" name="phone" placeholder="请输入手机号码" type="text">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="validation_name">性别</label>
                <div class="controls">
                    <input data-rule-minlength="1" data-rule-required="true" id="validation_name" name="sex" placeholder="Name" type="radio" value="1">男
                    <input data-rule-minlength="1" data-rule-required="true" id="validation_name" name="sex" placeholder="Name" type="radio" value="2">女
                    <input data-rule-minlength="1" data-rule-required="true" id="validation_name" name="sex" placeholder="Name" type="radio" value="3">保密
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="validation_name">地址</label>
                <div class="controls">
                    <input data-rule-minlength="2" data-rule-required="true" id="validation_name" name="address" placeholder="address " type="text">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="validation_name">头像</label>
                <div class="controls">
                    <input data-rule-minlength="2" data-rule-required="true" id="validation_name" name="photo " placeholder="photo" type="file">
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