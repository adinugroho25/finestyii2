<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <style type="text/css">
        body {color:#ffffff;background:url(<?= $this->theme->baseUrl;?>/dist/img/bg-login.jpg)no-repeat right bottom / cover #605ca8 !important;}
        .errorMessage{
            color:#fe6e41;
        }
    </style>
</head>


<body class="hold-transition skin-purple-light">
<?php $this->beginBody() ?>
    <?php echo $content; ?>
    <div id="logoTelkom"></div>
    <div id="footerLogin">
        Copyright &copy; <?php echo date('Y'); ?> - PT. Telekomunikasi Indonesia, Tbk.<br>
    </div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>