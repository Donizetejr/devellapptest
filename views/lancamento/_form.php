<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Lancamento */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lancamento-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tipo')->textInput() ?>

    <?= $form->field($model, 'idCredorDevedor')->textInput() ?>

    <?= $form->field($model, 'numDocumento')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dtVencimento')->textInput() ?>

    <?= $form->field($model, 'dtEmissao')->textInput() ?>

    <?= $form->field($model, 'dtRealizacao')->textInput() ?>

    <?= $form->field($model, 'valorPrevisto')->textInput() ?>

    <?= $form->field($model, 'valorRealizado')->textInput() ?>

    <?= $form->field($model, 'idBanco')->textInput() ?>

    <?= $form->field($model, 'idTipoDocumento')->textInput() ?>

    <?= $form->field($model, 'idFormaPagamento')->textInput() ?>

    <?= $form->field($model, 'idTipoConta')->textInput() ?>

    <?= $form->field($model, 'idPlanoConta')->textInput() ?>

    <?= $form->field($model, 'descricao')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'idCliente')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
