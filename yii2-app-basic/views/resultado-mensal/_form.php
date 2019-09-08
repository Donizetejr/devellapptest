<?php

use app\models\Associacao;
use app\models\CategoriaResultado;
use app\models\Cliente;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ResultadoMensal */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="resultado-mensal-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ano')->textInput() ?>

    <?= $form->field($model, 'mes')->textInput() ?>

    <?= $form->field($model, 'valor')->textInput() ?>

    <?= $form->field($model, 'idCategoriaResultado')->dropDownList(ArrayHelper::map(CategoriaResultado::find()->all(), 'id', 'nome'), ['prompt' => 'Selecione uma Categoria']) ?>

    <?= $form->field($model, 'idCliente')->dropDownList(ArrayHelper::map(Cliente::find()->all(), 'id', 'nome'), ['prompt' => 'Selecione um Cliente']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
