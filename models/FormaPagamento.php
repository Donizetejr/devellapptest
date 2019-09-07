<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "formapagamento".
 *
 * @property int $id
 * @property string $nome
 *
 * @property Lancamento[] $lancamentos
 */
class FormaPagamento extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'formapagamento';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome'], 'required'],
            [['nome'], 'string', 'max' => 30],
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
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLancamentos()
    {
        return $this->hasMany(Lancamento::className(), ['idFormaPagamento' => 'id']);
    }
}
