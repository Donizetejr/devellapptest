<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Associacao */

$this->title = 'Nova Associação';
$this->params['breadcrumbs'][] = ['label' => 'Associações', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="associacao-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
