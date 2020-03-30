<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>FINeST&trade; - Financial Enhanced Supporting Tools</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <?php
            Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . '/bootstrap/css/bootstrap.min.css');
            Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . '/plugins/font-awesome/css/font-awesome.min.css');
            Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . '/plugins/ionicons/css/ionicons.min.css');
            Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . '/dist/css/AdminLTE.min.css');
            Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . '/dist/css/sweetalert.css');
            Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . '/dist/css/skins/_all-skins.min.css');
            Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . '/dist/css/animate.min.css');
            Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . '/plugins/iCheck/flat/blue.css');
            Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . '/plugins/morris/morris.css');
            Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . '/plugins/select2now/select2.css');
        ?>
        <style media="screen">
            .skin-purple-light .wrapper, .skin-purple-light .main-sidebar, .skin-purple-light .left-side {
                background-color:#FFFFFF;
            }
            .content-wrapper{
                background-color:#FFFFFF;
                min-height: 100%;
                z-index: 800;
            }
            input[type="file"] {
                display: block;
                height: auto;
                padding: 5px;
            }
            .loader_page{
                z-index: 50;
                background: rgba(255,255,255,0.7);
                border-radius: 3px;
            }
            .loader_page{
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
            }
            .loader_page > .fa{
                position: absolute;
                top: 50%;
                left: 50%;
                margin-left: -15px;
                margin-top: -15px;
                color: #000;
                font-size: 30px;
            }
            .content-wrapper {
                margin-top: 0px;
            }
            .content {
                min-height: 250px;
                padding:0px;
                margin-right: auto;
                margin-left: auto;
                padding-left: 0px;
                padding-right: 0px;
            }
        </style>
        <script type="text/javascript">
            jQuery(document).ready(function($){
                $('.uang').number( true , 0 , ',' , '.' );
                autosize(document.querySelectorAll('textarea'));
            })
            function getDocHeight(doc){
           	     doc = doc || document;
           	     var body = doc.body, html = doc.documentElement;
           	     var height = Math.max( body.scrollHeight, body.offsetHeight,
           	     html.clientHeight, html.scrollHeight, html.offsetHeight );
           	     return height;
            }

            function setIframeHeight(id) {
           	     var ifrm = document.getElementById(id);
           	     var doc = ifrm.contentDocument? ifrm.contentDocument:
           	     ifrm.contentWindow.document;
           	     ifrm.style.visibility = 'hidden';
           	     ifrm.style.height = "10px";
           	     ifrm.style.height = getDocHeight( doc ) + 4 + "px";
           	     ifrm.style.visibility = 'visible';
            }
        </script>
    </head>
    <body class="hold-transition skin-purple-light">
        <div class="wrapper">
            <div class="content-wrapper">
                <div class="content">
                    <?php echo $content; ?>
                </div>
            </div>
        </div>
        <?php
        Yii::app()->clientScript->registerCoreScript('jquery');
        Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/bootstrap/js/bootstrap.min.js', CClientScript::POS_BEGIN);
        Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/plugins/typeahead/bootstrap-typeahead.min.js', CClientScript::POS_BEGIN);
        Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/plugins/sparkline/jquery.sparkline.min.js', CClientScript::POS_BEGIN);
        Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/plugins/slimScroll/jquery.slimscroll.min.js', CClientScript::POS_BEGIN);
        Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/dist/js/app.min.js', CClientScript::POS_BEGIN);
        Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/dist/js/sweetalert.min.js', CClientScript::POS_BEGIN);
        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/javascriptHelper.js', CClientScript::POS_BEGIN);
        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/jquery.MultiFile.js', CClientScript::POS_BEGIN);
        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/autosize.js', CClientScript::POS_BEGIN);
        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/jquery-validation/jquery.validate.min.js', CClientScript::POS_BEGIN);
        Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/plugins/select2now/select2.js', CClientScript::POS_BEGIN);
        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/jquery.number.min.js', CClientScript::POS_BEGIN);
        ?>
    </body>
</html>
