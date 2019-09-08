<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ResultadoMensalSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="resultado-mensal-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'ano') ?>

    <?= $form->field($model, 'mes') ?>

    <?= $form->field($model, 'valor') ?>

    <?= $form->field($model, 'idCategoriaResultado') ?>

    <?php // echo $form->field($model, 'idCliente') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
