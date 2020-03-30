<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>FINeST&trade; - Financial Enhanced Supporting Tools</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <?php Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/ssp.css');?>
        <?php Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/style.css');?>
        <script type="text/javascript">
            function print_page(){
                window.print();
                setTimeout(function(){
                    window.close();
                }, 1000);
            }
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
        <?php Yii::app()->clientScript->registerCoreScript('jquery');?>
    </head>
    <body style="font:10pt Tahoma" onload="print_page();"><?php echo $content; ?></body>
</html>
