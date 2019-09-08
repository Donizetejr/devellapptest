<?php

use app\models\Banco;
use app\models\Cidade;
use app\models\Cliente;
use app\models\CredorDevedor;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Lancamento */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lancamento-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tipo')->textInput() ?>

    <?= $form->field($model, 'idCredorDevedor')->dropDownList(ArrayHelper::map(CredorDevedor::find()->all(), 'id', 'nome'), ['prompt' => 'Selecione um CredorDevedor']) ?>

    <?= $form->field($model, 'numDocumento')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dtVencimento')->textInput() ?>

    <?= $form->field($model, 'dtEmissao')->textInput() ?>

    <?= $form->field($model, 'dtRealizacao')->textInput() ?>

    <?= $form->field($model, 'valorPrevisto')->textInput() ?>

    <?= $form->field($model, 'valorRealizado')->textInput() ?>

    <?= $form->field($model, 'idBanco')->dropDownList(ArrayHelper::map(Banco::find()->all(), 'id', 'nome'), ['prompt' => 'Selecione um Banco']) ?>

    <?= $form->field($model, 'idTipoDocumento')->textInput() ?>

    <?= $form->field($model, 'idFormaPagamento')->textInput() ?>

    <?= $form->field($model, 'idTipoConta')->textInput() ?>

    <?= $form->field($model, 'idPlanoConta')->textInput() ?>

    <?= $form->field($model, 'descricao')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'idCliente')->dropDownList(ArrayHelper::map(Cliente::find()->all(), 'id', 'nome'), ['prompt' => 'Selecione um Cliente']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
