<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "associacao".
 *
 * @property int $id
 * @property string $nome
 * @property string $descricao
 * @property int $idCidade
 * @property string $endereco
 * @property string $complemento
 * @property string $bairro
 * @property string $telefone
 * @property string $email
 * @property string $cnpj
 *
 * @property Cidade $cidade
 * @property Usuario $id0
 * @property Cliente[] $clientes
 */
class Associacao extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'associacao';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome'], 'required'],
            [['descricao'], 'string'],
            [['idCidade'], 'integer'],
            [['nome', 'bairro', 'email'], 'string', 'max' => 120],
            [['endereco'], 'string', 'max' => 255],
            [['complemento'], 'string', 'max' => 30],
            [['telefone'], 'string', 'max' => 20],
            [['cnpj'], 'string', 'max' => 14],
            [['idCidade'], 'exist', 'skipOnError' => true, 'targetClass' => Cidade::className(), 'targetAttribute' => ['idCidade' => 'id']],
            [['id'], 'exist', 'skipOnError' => true, 'targetClass' => Usuario::className(), 'targetAttribute' => ['id' => 'id']],
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
            'descricao' => 'Descricao',
            'idCidade' => 'Id Cidade',
            'endereco' => 'Endereco',
            'complemento' => 'Complemento',
            'bairro' => 'Bairro',
            'telefone' => 'Telefone',
            'email' => 'Email',
            'cnpj' => 'Cnpj',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCidade()
    {
        return $this->hasOne(Cidade::className(), ['id' => 'idCidade']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getId0()
    {
        return $this->hasOne(Usuario::className(), ['id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClientes()
    {
        return $this->hasMany(Cliente::className(), ['idAssociacao' => 'id']);
    }
}
