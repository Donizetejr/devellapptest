<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TipoConta */

$this->title = 'Novo Tipo Conta';
$this->params['breadcrumbs'][] = ['label' => 'Tipos de Conta', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipo-conta-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
