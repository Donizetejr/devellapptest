<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cidade".
 *
 * @property int $id
 * @property string $nome
 * @property int $idEstado
 *
 * @property Associacao[] $associacaos
 * @property Estado $estado
 * @property Cliente[] $clientes
 * @property Credordevedor[] $credordevedors
 */
class Cidade extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cidade';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome', 'idEstado'], 'required'],
            [['idEstado'], 'integer'],
            [['nome'], 'string', 'max' => 120],
            [['idEstado'], 'exist', 'skipOnError' => true, 'targetClass' => Estado::className(), 'targetAttribute' => ['idEstado' => 'id']],
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
            'idEstado' => 'Id Estado',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAssociacaos()
    {
        return $this->hasMany(Associacao::className(), ['idCidade' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEstado()
    {
        return $this->hasOne(Estado::className(), ['id' => 'idEstado']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClientes()
    {
        return $this->hasMany(Cliente::className(), ['idCidade' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCredordevedors()
    {
        return $this->hasMany(Credordevedor::className(), ['idCidade' => 'id']);
    }
}
