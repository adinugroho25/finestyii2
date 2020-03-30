<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>FINeST&trade; - Financial Enhanced Supporting Tools</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <?php
            Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . '/bootstrap/css/bootstrap.min.css');
            Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . '/plugins/font-awesome/css/font-awesome.min.css');
            Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . '/plugins/ionicons/css/ionicons.min.css');
            Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . '/dist/css/AdminLTE.min.css');
            Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . '/dist/css/sweetalert.css');
            Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . '/dist/css/skins/_all-skins.min.css');
            Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . '/plugins/iCheck/flat/blue.css');
            Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . '/plugins/morris/morris.css');
            Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . '/dist/css/jquery-ui.css');
            Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . '/plugins/select2now/select2.css');
        ?>
        <style media="screen">
            input[type="file"] {
                display: block;
                height: auto;
                padding: 5px;
            }            
        </style>
    </head>
    <body class="hold-transition skin-purple-light">
        <div class="wrapper">

            <header class="main-header">
                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-fixed-top">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                    </a>
                    <!-- Logo -->
                    <a href="<?php echo Yii::app()->request->baseUrl; ?>/" class="logo">
                        <b><img src="<?php echo Yii::app()->theme->baseUrl; ?>/dist/img/logfin_.png" alt="FINeST" /></b>
                    </a>
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav hidden-sm">
                            <!-- MENU TOP -->
                            <li><a href="<?php echo Yii::app()->homeUrl;?>"><i class="fa fa-home"></i> Home</a></li>
                            <?php
                            $top_menu = Appmenu::model()->top()->findAll();
                            foreach ($top_menu as $d_top) :
                                ?>
                                <li class="dropdown messages-menu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="fa fa-list-alt"></i>
                                        <?php echo $d_top->MENU_TEXT; ?>
                                        <i class="fa fa-caret-down"></i>
                                    </a>
                                    <?php
                                    $sub_top_menu = Appmenu::model()->findAllByAttributes(array('MENU_ID_PARENT' => $d_top->MENU_ID));
                                    if ($sub_top_menu != NULL) {
                                        echo '<ul class="dropdown-menu">';
                                        foreach ($sub_top_menu as $d_sub) {
                                            echo '<li><a href="' . Yii::app()->createUrl($d_sub->MODUL . '/' . $d_sub->MENU_LINK) . '">' . $d_sub->MENU_TEXT . '</a></li>';
                                        }
                                        echo '</ul>';
                                    }
                                    ?>
                                </li>
                            <?php endforeach; ?>
                            <!-- User Account: style can be found in dropdown.less -->
                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="<?php echo Photo::photoUrl(CHtml::encode(Yii::app()->user->getId())); ?>" class="user-image" alt="User Image">
                                    <span class="hidden-xs">&nbsp;</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- User image -->
                                    <li class="user-header">
                                        <img src="<?php echo Photo::photoUrl(CHtml::encode(Yii::app()->user->getId())); ?>" class="img-circle" alt="User Image">
                                        <p>
                                            <?php echo Yii::app()->user->name; ?>
                                            <small>Jabatan</small>
                                        </p>
                                    </li>
                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        <div class="pull-left">
                                            <a href="#" class="btn btn-default btn-flat">Profile</a>
                                        </div>
                                        <div class="pull-right">
                                            <a href="<?php echo Yii::app()->createUrl('site/logout'); ?>" class="btn btn-default btn-flat">Sign out</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <?php $this->renderPartial('//layouts/_sidebar'); ?>
                <!-- /.sidebar -->
            </aside>
            <div class="content-wrapper">
                <div class="content">
                    <div class="alert" id="alert_template" style="display:none;">
                        <button type="button" class="close" aria-label="Close" onclick="$('#alert_template').fadeOut('slow');">
                          <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="alert_content">
                            Loader......
                        </div>
                    </div>
                    <?php echo $content; ?>
                </div>
            </div>
            <footer class="main-footer">
                Designed & Developed by : Div IT & HCBP. Copyright © 2016 - PT. Telekomunikasi Indonesia.
            </footer>
        </div>
        <!-- ./wrapper -->
        <!-- jQuery 2.2.3 -->
        <?php
        Yii::app()->clientScript->registerCoreScript('jquery');
        Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/bootstrap/js/bootstrap.min.js', CClientScript::POS_BEGIN);
        Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/plugins/sparkline/jquery.sparkline.min.js', CClientScript::POS_BEGIN);
        Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/plugins/slimScroll/jquery.slimscroll.min.js', CClientScript::POS_BEGIN);
        Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/dist/js/app.min.js', CClientScript::POS_BEGIN);
        Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/dist/js/sweetalert.min.js', CClientScript::POS_BEGIN);
        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/javascriptHelper.js', CClientScript::POS_BEGIN);
        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/jquery.MultiFile.js', CClientScript::POS_BEGIN);
        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/jquery.ajax-progress.js', CClientScript::POS_BEGIN);
        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/jquery-ui.min.js', CClientScript::POS_BEGIN);
        Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/plugins/select2now/select2.js', CClientScript::POS_BEGIN);
        ?>
    </body>
</html>
