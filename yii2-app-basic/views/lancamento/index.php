<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\LancamentoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Lancamentos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lancamento-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Lancamento', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'tipo',
            'idCredorDevedor',
            'numDocumento',
            'dtVencimento',
            //'dtEmissao',
            //'dtRealizacao',
            //'valorPrevisto',
            //'valorRealizado',
            //'idBanco',
            //'idTipoDocumento',
            //'idFormaPagamento',
            //'idTipoConta',
            //'idPlanoConta',
            //'descricao',
            //'idCliente',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
