<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\RetencaoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Retencaos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="retencao-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Retencao', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'ano',
            'mes',
            'valor',
            'idCliente',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
