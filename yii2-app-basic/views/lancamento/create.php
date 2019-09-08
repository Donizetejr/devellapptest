<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Lancamento */

$this->title = 'Create Lancamento';
$this->params['breadcrumbs'][] = ['label' => 'Lancamentos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lancamento-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
