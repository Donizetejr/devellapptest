<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "retencao".
 *
 * @property int $id
 * @property int $ano
 * @property int $mes
 * @property double $valor
 * @property int $idCliente
 *
 * @property Cliente $cliente
 */
class Retencao extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'retencao';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ano', 'mes', 'valor', 'idCliente'], 'required'],
            [['ano', 'mes', 'idCliente'], 'integer'],
            [['valor'], 'number'],
            [['idCliente'], 'exist', 'skipOnError' => true, 'targetClass' => Cliente::className(), 'targetAttribute' => ['idCliente' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ano' => 'Ano',
            'mes' => 'Mes',
            'valor' => 'Valor',
            'idCliente' => 'Id Cliente',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCliente()
    {
        return $this->hasOne(Cliente::className(), ['id' => 'idCliente']);
    }
}
