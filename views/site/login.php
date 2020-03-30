<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>

<div id="login">
    <div class="login-box">
        <div class="login-logo">
            <img src="<?= $this->theme->baseUrl;?>/dist/img/logfin.png" alt="Telkom Indonesia" />
        </div>
        <div class="login-box-body">
            <?php $form = ActiveForm::begin([
                'id' => 'login-form',
                'options' => [
                    'class' => ''
                    ],
                'fieldConfig' => [
                    'options' => [
                        'tag' => false,
                    ],
                    'errorOptions' => [
                        'class' => 'errorMessage',
                    ]
                ],
            ]); ?>
            
                <div class="form-group has-feedback">
                    <?= $form->field($model, 'username',[
                        'template' => '{input}{hint}<div class="center">{error}</div><span class="fa fa-lock form-control-feedback"></span>'
                        ])->textInput(['autofocus' => true, 'placeholder' => 'Username']) ?>
                </div>
                <div class="form-group has-feedback">
                    <?= $form->field($model, 'password', [
                        'template' => '{input}<div class="center">{error}</div><span class="fa fa-lock form-control-feedback"></span>'
                    ])->passwordInput(['placeholder' => 'Password']) ?>
                </div>

                <div class="form-group">
                    <div class="col-lg-offset-1 col-lg-10">
                        <?= Html::submitButton('<i class="fa fa-sign-in"></i> Sign In', ['class' => 'btn btn-login btn-block btn-flat', 'name' => 'login-button']) ?>
                    </div>
                </div>

            <?php ActiveForm::end(); ?>         
            
        </div>
    </div>
</div>