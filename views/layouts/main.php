<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\models\Menu;

AppAsset::register($this);
$menu = new Menu();
//echo '<pre>';
//print_r($menu->showMenu());
//exit;
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
</head>


<body class="hold-transition skin-purple-light">
<?php $this->beginBody() ?>
    <div class="wrapper">
        <header class="main-header">
            <!-- Header Navbar: style can be found in header.less -->
            <?php
                NavBar::begin([
                    'brandLabel' => '<a href="/" class="logo">
                        <b><img src="'.$this->theme->baseUrl.'/dist/img/logfin_.png" alt="FINeST"></b>
                    </a>',
                    'brandUrl' => Yii::$app->homeUrl,
                    'options' => [
                        'class' => 'navbar navbar-fixed-top',
                    ],
                    'containerOptions' => [
                            'class' => 'navbar-custom-menu',
                    ],
                ]);
                echo Nav::widget([
                    'options' => ['class' => 'nav navbar-nav rj-nav'],
                    'encodeLabels' => false,
//                    'items' => [
//                        ['label' => '<i class="fa fa-home"></i> HOME', 'url' => ['/site/index']],
//                        ['label' => 'ABOUT', 'url' => ['/site/about']],
//                        ['label' => 'CONTACT', 'url' => ['/site/contact']],
//                        [
//                            'label' => 'Dropdown',
//                            'items' => [
//                                    ['label' => 'Dropdown A', 'url' => '#'],
//                                    '<li class="hover-down"></li>',
//                                    [
//                                        'label' => 'Dropdown B',
//                                        'items' => [
//                                            ['label' => 'Dropdown BA', 'url' => '#'],
//                                            ['label' => 'Dropdown BB', 'url' => '#'],
//                                        ]
//                                    ],
//                            ],
//                            'options' => ['class'=>'hover-down'],
//                        ],
//                        Yii::$app->user->isGuest ? (
//                            ['label' => 'Login', 'url' => ['/site/login']]
//                        ) : (
//                            '<li>'
//                            . Html::beginForm(['/site/logout'], 'post')
//                            . Html::submitButton(
//                                'Logout (' . Yii::$app->user->identity->username . ')',
//                                ['class' => 'btn btn-link logout']
//                            )
//                            . Html::endForm()
//                            . '</li>'
//                        )
//                    ],
                    'items' => $menu->showMenu(),
                ]);
                NavBar::end();
            ?>

        </header>
        <div class="content-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-12">
                        <div id="alert_template" style="display:none">
                            <button type="button" class="close" aria-label="Close" onclick="$('#alert_template').fadeOut('slow');">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <div class="alert_content">
                                Loader......
                            </div>
                        </div>
                    </div>
                </div>
                <?= Breadcrumbs::widget([
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                ]) ?>
                <?= Alert::widget() ?>
                <?= $content ?>
            </div>
        </div>

        <footer class="main-footer" style="padding: 5px;">
            Designed & Developed by : PT. Telekomunikasi Indonesia. Copyright © 2018 .
        </footer>
    </div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
