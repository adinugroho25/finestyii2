<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Suser */

$this->title = 'Create Suser';
$this->params['breadcrumbs'][] = ['label' => 'Susers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="suser-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
