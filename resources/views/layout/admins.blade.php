<!DOCTYPE html>
<html>

    <head>
        <title>
            Flatty - Flat administration template
        </title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no'
        name='viewport' />
        <!--[if lt IE 9]>
            <script src='assets/javascripts/html5shiv.js' type='text/javascript'>
            </script>
        <![endif]-->
        <link href='/assets/stylesheets/bootstrap/bootstrap.css' media='all' rel='stylesheet'
        type='text/css' />
        <link href='/assets/stylesheets/bootstrap/bootstrap-responsive.css' media='all'
        rel='stylesheet' type='text/css' />
        <!-- / jquery ui -->
        <link href='/assets/stylesheets/jquery_ui/jquery-ui-1.10.0.custom.css'
        media='all' rel='stylesheet' type='text/css' />
        <link href='/assets/stylesheets/jquery_ui/jquery.ui.1.10.0.ie.css' media='all'
        rel='stylesheet' type='text/css' />
        <!-- / switch buttons -->
        <link href='/assets/stylesheets/plugins/bootstrap_switch/bootstrap-switch.css'
        media='all' rel='stylesheet' type='text/css' />
        <!-- / xeditable -->
        <link href='/assets/stylesheets/plugins/xeditable/bootstrap-editable.css'
        media='all' rel='stylesheet' type='text/css' />
        <link href='/assets/stylesheets/plugins/common/bootstrap-wysihtml5.css'
        media='all' rel='stylesheet' type='text/css' />
        <!-- / wysihtml5 (wysywig) -->
        <link href='/assets/stylesheets/plugins/common/bootstrap-wysihtml5.css'
        media='all' rel='stylesheet' type='text/css' />
        <!-- / jquery file upload -->
        <link href='/assets/stylesheets/plugins/jquery_fileupload/jquery.fileupload-ui.css'
        media='all' rel='stylesheet' type='text/css' />
        <!-- / full calendar -->
        <link href='/assets/stylesheets/plugins/fullcalendar/fullcalendar.css'
        media='all' rel='stylesheet' type='text/css' />
        <!-- / select2 -->
        <link href='/assets/stylesheets/plugins/select2/select2.css' media='all'
        rel='stylesheet' type='text/css' />
        <!-- / mention -->
        <link href='/assets/stylesheets/plugins/mention/mention.css' media='all'
        rel='stylesheet' type='text/css' />
        <!-- / tabdrop (responsive tabs) -->
        <link href='/assets/stylesheets/plugins/tabdrop/tabdrop.css' media='all'
        rel='stylesheet' type='text/css' />
        <!-- / jgrowl notifications -->
        <link href='/assets/stylesheets/plugins/jgrowl/jquery.jgrowl.min.css'
        media='all' rel='stylesheet' type='text/css' />
        <!-- / datatables -->
        <link href='/assets/stylesheets/plugins/datatables/bootstrap-datatable.css'
        media='all' rel='stylesheet' type='text/css' />
        <!-- / dynatrees (file trees) -->
        <link href='/assets/stylesheets/plugins/dynatree/ui.dynatree.css' media='all'
        rel='stylesheet' type='text/css' />
        <!-- / color picker -->
        <link href='/assets/stylesheets/plugins/bootstrap_colorpicker/bootstrap-colorpicker.css'
        media='all' rel='stylesheet' type='text/css' />
        <!-- / datetime picker -->
        <link href='/assets/stylesheets/plugins/bootstrap_datetimepicker/bootstrap-datetimepicker.min.css'
        media='all' rel='stylesheet' type='text/css' />
        <!-- / daterange picker) -->
        <link href='/assets/stylesheets/plugins/bootstrap_daterangepicker/bootstrap-daterangepicker.css'
        media='all' rel='stylesheet' type='text/css' />
        <!-- / flags (country flags) -->
        <link href='/assets/stylesheets/plugins/flags/flags.css' media='all' rel='stylesheet'
        type='text/css' />
        <!-- / slider nav (address book) -->
        <link href='/assets/stylesheets/plugins/slider_nav/slidernav.css' media='all'
        rel='stylesheet' type='text/css' />
        <!-- / fuelux (wizard) -->
        <link href='/assets/stylesheets/plugins/fuelux/wizard.css' media='all'
        rel='stylesheet' type='text/css' />
        <!-- / flatty theme -->
        <link href='/assets/stylesheets/light-theme.css' id='color-settings-body-color'
        media='all' rel='stylesheet' type='text/css' />
        <!-- / demo -->
        <link href='/assets/stylesheets/demo.css' media='all' rel='stylesheet'
        type='text/css' />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    </head>

    <body class='contrast-red '>
        <header>
            <div class='navbar'>
                <div class='navbar-inner'>
                    <div class='container-fluid'>
                        <a class='brand' href='http://www.xiangmu.com/admin'>
                            <i class='icon-heart-empty'>
                            </i>
                            <span class='hidden-phone'>
                                小小后台
                            </span>
                        </a>
                        <a class='toggle-nav btn pull-left' href='#'>
                            <i class='icon-reorder'>
                            </i>
                        </a>
                        <ul class='nav pull-right'>
                            <li class='dropdown dark user-menu'>
                                <a class='dropdown-toggle' data-toggle='dropdown' href='#'>
                                    <img alt='Mila Kunis' height='23' src='/assets/images/avatar.jpg' width='23'
                                    />
                                    <span class='user-name hidden-phone'>
                                        人物
                                    </span>
                                    <b class='caret'>
                                    </b>
                                </a>
                                <ul class='dropdown-menu'>
                                    <li>
                                        <a href='user_profile.html'>
                                            <i class='icon-user'>
                                            </i>
                                            个人信息
                                        </a>
                                    </li>
                                    <li>
                                        <a href='user_profile.html'>
                                            <i class='icon-cog'>
                                            </i>
                                            设置
                                        </a>
                                    </li>
                                    <li class='divider'>
                                    </li>
                                    <li>
                                        <a href='sign_in.html'>
                                            <i class='icon-signout'>
                                            </i>
                                            退出
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </header>
        <div id='wrapper'>
            <div id='main-nav-bg'>
            </div>
            <nav class='' id='main-nav'>
                <div class='navigation'>
                    <div class='search'>
                        <form accept-charset="UTF-8" action="search_results.html" method="get"
                        />
                        <div style="margin:0;padding:0;display:inline">
                            <input name="utf8" type="hidden" value="&#x2713;" />
                        </div>
                        <div class='search-wrapper'>
                            <input autocomplete="off" class="search-query" id="q" name="q" placeholder="Search..."
                            type="text" value="" />
                            <button class="btn btn-link icon-search" name="button" type="submit">
                            </button>
                        </div>
                        </form>
                    </div>
                    <ul class='nav nav-stacked'>
                        <li>
                            <a class='dropdown-collapse' href='#'>
                                <i class='icon-folder-open-alt'>
                                </i>
                                <span>
                                    用户管理
                                </span>
                                <i class='icon-angle-down angle-down'>
                                </i>
                            </a>
                            <li>
                                <a class='dropdown-collapse ' href='#'>
                                    <i class='icon-home'></i>
                                    <span>用户管理</span>
                                    <i class='icon-angle-down angle-down'></i>
                                </a>
                                <ul class='nav nav-stacked'>
                                    <li class=''>
                                        <a href='/admin/user/create'>
                                            <i class='icon-money'></i>
                                            <span>添加用户</span>
                                        </a>
                                    </li>
                                     <li class=''>
                                        <a href='/admin/user'>
                                            <i class='icon-money'></i>
                                            <span>管理用户</span>
                                        </a>
                                    </li>

                                </ul>
                            </li>
                        </li>
                        <li>
                            <a class='dropdown-collapse ' href='#'>
                                <i class='icon-th-large'>
                                </i>
                                <span>
                                    一级分类
                                </span>
                                <i class='icon-angle-down angle-down'>
                                </i>
                            </a>
                            <ul class='nav nav-stacked'>
                                <li class=''>
                                    <a href='/admin/onetype/create'>
                                        <i class='icon-keyboard'>
                                        </i>
                                        <span>
                                            添加一级分类
                                        </span>
                                    </a>
                                </li>
                                <li class=''>
                                    <a href='/admin/onetype'>
                                        <i class='icon-th'>
                                        </i>
                                        <span>
                                            管理一级分类
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class='dropdown-collapse ' href='#'>
                                <i class='icon-th'>
                                </i>
                                <span>
                                    二级分类
                                </span>
                                <i class='icon-angle-down angle-down'>
                                </i>
                            </a>
                            <ul class='nav nav-stacked'>
                                <li class=''>
                                    <a href='/admin/twotype/create'>
                                        <i class='icon-keyboard'>
                                        </i>
                                        <span>
                                            添加二级分类
                                        </span>
                                    </a>
                                </li>
                                <li class=''>
                                    <a href='/admin/twotype'>
                                        <i class='icon-th-list'>
                                        </i>
                                        <span>
                                            管理二级分类
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class='dropdown-collapse ' href='#'>
                                <i class='icon-th-list'>
                                </i>
                                <span>
                                    三级分类
                                </span>
                                <i class='icon-angle-down angle-down'>
                                </i>
                            </a>
                            <ul class='nav nav-stacked'>
                                <li class=''>
                                    <a href='/admin/user/create'>
                                        <i class='icon-keyboard'>
                                        </i>
                                        <span>
                                            添加三级分类
                                        </span>
                                    </a>
                                </li>
                                <li class=''>
                                    <a href='invoice.html'>
                                        <i class='icon-th-list'>
                                        </i>
                                        <span>
                                            管理三级分类
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
            <section id='content'>
                <div class='container-fluid'>
                    <div class='row-fluid' id='content-wrapper'>
                        <div class='span12'>
                            <div class='page-header'>
                                <h1 class='pull-left'>
                                    <i class='icon-dashboard'>
                                    </i>
                                    <span>
                                        {{$title}}
                                    </span>
                                </h1>
                            </div>
                            @section('content')

                            @show
                        </div>
                    </div>
                </div>
            </header>





            <!-- / jquery -->
<script src='/assets/javascripts/jquery/jquery.min.js' type='text/javascript'>
</script>
<!-- / jquery mobile events (for touch and slide) -->
<script src='/assets/javascripts/plugins/mobile_events/jquery.mobile-events.min.js'
type='text/javascript'>
</script>
<!-- / jquery migrate (for compatibility with new jquery) -->
<script src='/assets/javascripts/jquery/jquery-migrate.min.js' type='text/javascript'>
</script>
<!-- / jquery ui -->
<script src='/assets/javascripts/jquery_ui/jquery-ui.min.js' type='text/javascript'>
</script>
<!-- / bootstrap -->
<script src='/assets/javascripts/bootstrap/bootstrap.min.js' type='text/javascript'>
</script>
<script src='/assets/javascripts/plugins/flot/excanvas.js' type='text/javascript'>
</script>
<!-- / sparklines -->
<script src='/assets/javascripts/plugins/sparklines/jquery.sparkline.min.js'
type='text/javascript'>
</script>
<!-- / flot charts -->
<script src='/assets/javascripts/plugins/flot/flot.min.js' type='text/javascript'>
</script>
<script src='/assets/javascripts/plugins/flot/flot.resize.js' type='text/javascript'>
</script>
<script src='/assets/javascripts/plugins/flot/flot.pie.js' type='text/javascript'>
</script>
<!-- / bootstrap switch -->
<script src='/assets/javascripts/plugins/bootstrap_switch/bootstrapSwitch.min.js'
type='text/javascript'>
</script>
<!-- / fullcalendar -->
<script src='/assets/javascripts/plugins/fullcalendar/fullcalendar.min.js'
type='text/javascript'>
</script>
<!-- / datatables -->
<script src='/assets/javascripts/plugins/datatables/jquery.dataTables.min.js'
type='text/javascript'>
</script>
<script src='/assets/javascripts/plugins/datatables/jquery.dataTables.columnFilter.js'
type='text/javascript'>
</script>
<!-- / wysihtml5 -->
<script src='/assets/javascripts/plugins/common/wysihtml5.min.js' type='text/javascript'>
</script>
<script src='/assets/javascripts/plugins/common/bootstrap-wysihtml5.js'
type='text/javascript'>
</script>
<!-- / select2 -->
<script src='/assets/javascripts/plugins/select2/select2.js' type='text/javascript'>
</script>
<!-- / color picker -->
<script src='/assets/javascripts/plugins/bootstrap_colorpicker/bootstrap-colorpicker.min.js'
type='text/javascript'>
</script>
<!-- / mention -->
<script src='/assets/javascripts/plugins/mention/mention.min.js' type='text/javascript'>
</script>
<!-- / input mask -->
<script src='/assets/javascripts/plugins/input_mask/bootstrap-inputmask.min.js'
type='text/javascript'>
</script>
<!-- / fileinput -->
<script src='/assets/javascripts/plugins/fileinput/bootstrap-fileinput.js'
type='text/javascript'>
</script>
<!-- / modernizr -->
<script src='/assets/javascripts/plugins/modernizr/modernizr.min.js' type='text/javascript'>
</script>
<!-- / retina -->
<script src='/assets/javascripts/plugins/retina/retina.js' type='text/javascript'>
</script>
<!-- / fileupload -->
<script src='/assets/javascripts/plugins/fileupload/tmpl.min.js' type='text/javascript'>
</script>
<script src='/assets/javascripts/plugins/fileupload/load-image.min.js'
type='text/javascript'>
</script>
<script src='/assets/javascripts/plugins/fileupload/canvas-to-blob.min.js'
type='text/javascript'>
</script>
<script src='/assets/javascripts/plugins/fileupload/jquery.iframe-transport.min.js'
type='text/javascript'>
</script>
<script src='/assets/javascripts/plugins/fileupload/jquery.fileupload.min.js'
type='text/javascript'>
</script>
<script src='/assets/javascripts/plugins/fileupload/jquery.fileupload-fp.min.js'
type='text/javascript'>
</script>
<script src='/assets/javascripts/plugins/fileupload/jquery.fileupload-ui.min.js'
type='text/javascript'>
</script>
<script src='/assets/javascripts/plugins/fileupload/jquery.fileupload-init.js'
type='text/javascript'>
</script>
<!-- / timeago -->
<script src='/assets/javascripts/plugins/timeago/jquery.timeago.js' type='text/javascript'>
</script>
<!-- / slimscroll -->
<script src='/assets/javascripts/plugins/slimscroll/jquery.slimscroll.min.js'
type='text/javascript'>
</script>
<!-- / autosize (for textareas) -->
<script src='/assets/javascripts/plugins/autosize/jquery.autosize-min.js'
type='text/javascript'>
</script>
<!-- / charCount -->
<script src='/assets/javascripts/plugins/charCount/charCount.js' type='text/javascript'>
</script>
<!-- / validate -->
<script src='/assets/javascripts/plugins/validate/jquery.validate.min.js'
type='text/javascript'>
</script>
<script src='/assets/javascripts/plugins/validate/additional-methods.js'
type='text/javascript'>
</script>
<!-- / naked password -->
<script src='/assets/javascripts/plugins/naked_password/naked_password-0.2.4.min.js'
type='text/javascript'>
</script>
<!-- / nestable -->
<script src='/assets/javascripts/plugins/nestable/jquery.nestable.js'
type='text/javascript'>
</script>
<!-- / tabdrop -->
<script src='/assets/javascripts/plugins/tabdrop/bootstrap-tabdrop.js'
type='text/javascript'>
</script>
<!-- / jgrowl -->
<script src='/assets/javascripts/plugins/jgrowl/jquery.jgrowl.min.js'
type='text/javascript'>
</script>
<!-- / bootbox -->
<script src='/assets/javascripts/plugins/bootbox/bootbox.min.js' type='text/javascript'>
</script>
<!-- / inplace editing -->
<script src='/assets/javascripts/plugins/xeditable/bootstrap-editable.min.js'
type='text/javascript'>
</script>
<script src='/assets/javascripts/plugins/xeditable/wysihtml5.js' type='text/javascript'>
</script>
<!-- / ckeditor -->
<script src='/assets/javascripts/plugins/ckeditor/ckeditor.js' type='text/javascript'>
</script>
<!-- / filetrees -->
<script src='/assets/javascripts/plugins/dynatree/jquery.dynatree.min.js'
type='text/javascript'>
</script>
<!-- / datetime picker -->
<script src='/assets/javascripts/plugins/bootstrap_datetimepicker/bootstrap-datetimepicker.js'
type='text/javascript'>
</script>
<!-- / daterange picker -->
<script src='/assets/javascripts/plugins/bootstrap_daterangepicker/moment.min.js'
type='text/javascript'>
</script>
<script src='/assets/javascripts/plugins/bootstrap_daterangepicker/bootstrap-daterangepicker.js'
type='text/javascript'>
</script>
<!-- / max length -->
<script src='/assets/javascripts/plugins/bootstrap_maxlength/bootstrap-maxlength.min.js'
type='text/javascript'>
</script>
<!-- / dropdown hover -->
<script src='/assets/javascripts/plugins/bootstrap_hover_dropdown/twitter-bootstrap-hover-dropdown.min.js'
type='text/javascript'>
</script>
<!-- / slider nav (address book) -->
<script src='/assets/javascripts/plugins/slider_nav/slidernav-min.js'
type='text/javascript'>
</script>
<!-- / fuelux -->
<script src='/assets/javascripts/plugins/fuelux/wizard.js' type='text/javascript'>
</script>
<!-- / flatty theme -->
<script src='/assets/javascripts/nav.js' type='text/javascript'>
</script>
<script src='/assets/javascripts/tables.js' type='text/javascript'>
</script>
<script src='/assets/javascripts/theme.js' type='text/javascript'>
</script>
<!-- / demo -->
<script src='/assets/javascripts/demo/jquery.mockjax.js' type='text/javascript'>
</script>
<script src='/assets/javascripts/demo/inplace_editing.js' type='text/javascript'>
</script>
<script src='/assets/javascripts/demo/charts.js' type='text/javascript'>
</script>
<script src='/assets/javascripts/demo/demo.js' type='text/javascript'>
</script>
@section('js')

@show
    </body>
</html>
