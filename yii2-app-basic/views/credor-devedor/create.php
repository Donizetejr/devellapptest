<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CredorDevedor */

$this->title = 'Novo Credor Devedor';
$this->params['breadcrumbs'][] = ['label' => 'Credor Devedor', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="credor-devedor-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
