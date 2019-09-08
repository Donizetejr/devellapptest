<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\FormaPagamento */

$this->title = 'Create Forma Pagamento';
$this->params['breadcrumbs'][] = ['label' => 'Forma Pagamentos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="forma-pagamento-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
