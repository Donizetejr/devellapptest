<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Lancamento */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Lancamentos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="lancamento-view">

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
            'tipo',
            'idCredorDevedor',
            'numDocumento',
            'dtVencimento',
            'dtEmissao',
            'dtRealizacao',
            'valorPrevisto',
            'valorRealizado',
            'idBanco',
            'idTipoDocumento',
            'idFormaPagamento',
            'idTipoConta',
            'idPlanoConta',
            'descricao',
            'idCliente',
        ],
    ]) ?>

</div>
