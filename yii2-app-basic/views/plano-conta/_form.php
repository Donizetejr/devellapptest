<?php

use app\models\Associacao;
use app\models\Cliente;
use app\models\PlanoConta;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PlanoConta */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="plano-conta-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nome')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'idPai')->dropDownList(ArrayHelper::map(PlanoConta::find()->all(), 'idPai', 'nome'), ['prompt' => 'Selecione um Pai']) ?>

    <?= $form->field($model, 'idCliente')->dropDownList(ArrayHelper::map(Cliente::find()->all(), 'id', 'nome'), ['prompt' => 'Selecione um Cliente']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
