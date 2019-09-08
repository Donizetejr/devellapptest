<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PlanoConta */

$this->title = 'Novo Plano de Conta';
$this->params['breadcrumbs'][] = ['label' => 'Planos de Conta', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="plano-conta-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
