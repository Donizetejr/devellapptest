<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\LancamentoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lancamento-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'tipo') ?>

    <?= $form->field($model, 'idCredorDevedor') ?>

    <?= $form->field($model, 'numDocumento') ?>

    <?= $form->field($model, 'dtVencimento') ?>

    <?php // echo $form->field($model, 'dtEmissao') ?>

    <?php // echo $form->field($model, 'dtRealizacao') ?>

    <?php // echo $form->field($model, 'valorPrevisto') ?>

    <?php // echo $form->field($model, 'valorRealizado') ?>

    <?php // echo $form->field($model, 'idBanco') ?>

    <?php // echo $form->field($model, 'idTipoDocumento') ?>

    <?php // echo $form->field($model, 'idFormaPagamento') ?>

    <?php // echo $form->field($model, 'idTipoConta') ?>

    <?php // echo $form->field($model, 'idPlanoConta') ?>

    <?php // echo $form->field($model, 'descricao') ?>

    <?php // echo $form->field($model, 'idCliente') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
