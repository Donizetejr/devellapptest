<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "planoconta".
 *
 * @property int $id
 * @property string $nome
 * @property int $idPai
 * @property int $idCliente
 *
 * @property Lancamento[] $lancamentos
 * @property Cliente $cliente
 * @property PlanoConta $pai
 * @property PlanoConta[] $planoContas
 */
class PlanoConta extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'planoconta';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome', 'idPai', 'idCliente'], 'required'],
            [['idPai', 'idCliente'], 'integer'],
            [['nome'], 'string', 'max' => 120],
            [['idCliente'], 'exist', 'skipOnError' => true, 'targetClass' => Cliente::className(), 'targetAttribute' => ['idCliente' => 'id']],
            [['idPai'], 'exist', 'skipOnError' => true, 'targetClass' => PlanoConta::className(), 'targetAttribute' => ['idPai' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nome' => 'Nome',
            'idPai' => 'Id Pai',
            'idCliente' => 'Id Cliente',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLancamentos()
    {
        return $this->hasMany(Lancamento::className(), ['idPlanoConta' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCliente()
    {
        return $this->hasOne(Cliente::className(), ['id' => 'idCliente']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPai()
    {
        return $this->hasOne(PlanoConta::className(), ['id' => 'idPai']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPlanoContas()
    {
        return $this->hasMany(PlanoConta::className(), ['idPai' => 'id']);
    }
}
