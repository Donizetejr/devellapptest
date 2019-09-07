<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Banco */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="banco-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'nome')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'agencia')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'conta')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'idCliente')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
