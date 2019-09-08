<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TipoConta */

$this->title = 'Create Tipo Conta';
$this->params['breadcrumbs'][] = ['label' => 'Tipo Contas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipo-conta-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
