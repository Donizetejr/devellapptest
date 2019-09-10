<?php

use app\models\Cliente;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Usuario */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="usuario-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idPerfil')->textInput() ?>

    <?= $form->field($model, 'nome')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'idFirebase')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'authKey')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'passwordHash')->passwordInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'passwordResetToken')->passwordInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'createdAt')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'updatedAt')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'idCliente')->dropDownList(ArrayHelper::map(Cliente::find()->all(), 'id', 'nome'), ['prompt' => 'Selecione um Cliente']) ?>
    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'imagem')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Gravar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
