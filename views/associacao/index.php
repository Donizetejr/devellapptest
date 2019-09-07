<?php
/* @var $this yii\web\View */


use app\controllers\AssociacaoController;
use app\models\Associacao;
use yii\helpers\Html;

//$searchModel = $this->params;
$cidade = Associacao::find()->all();


echo "<pre>";
echo "<select class='form-control' name='id_associacao'>";

foreach($cidade as $c){
    echo "<option>";
    echo $c->nome;
    echo "</option>";
}

echo "</select>";

?>
