<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\widgets\Pjax;
use yii\bootstrap\Modal;

/* @var $this yii\web\View */
/* @var $model app\models\Suser */

$this->title = 'Suser/Detail/'.$model->id;
$this->params['breadcrumbs'][] = ['label' => 'Susers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $model->nik;
\yii\web\YiiAsset::register($this);
//echo '<pre>';
//print_r($model->profiles);exit;
?>
<div class="suser-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'nik',
            [
                'label' => 'Profile Pegawai',
                'value' => $model->profilePegawaiText,
                'format' => 'html'
            ],
            [
                'label' => 'Profile Finest',
                'value' => $model->profilesImploded,
                'format' => 'raw'
            ],
        ],
    ]) ?>
    
    <?php
    Modal::begin([
        'headerOptions' => ['id' => 'modalProfileHeader'],
        'id' => 'modalProfile',
    ]);
    echo "<div id='modalProfileContent'>";
    Pjax::begin([
        'id' => 'modalProfileContent',
        'linkSelector' => '.link_selector',
        'enablePushState'=>false,
    ]);
    Pjax::end();
    echo "</div>";
    Modal::end();
    ?>

</div>
