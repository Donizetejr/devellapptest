<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CredorDevedor */

$this->title = 'Atualizar Credor Devedor: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Credor Devedors', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="credor-devedor-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
