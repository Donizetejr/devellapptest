<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cliente".
 *
 * @property int $id
 * @property string $nome
 * @property string $cnpj
 * @property int $idCidade
 * @property string $endereco
 * @property string $complemento
 * @property string $bairro
 * @property string $telefone
 * @property string $email
 * @property int $idAssociacao
 *
 * @property Banco[] $bancos
 * @property Associacao $associacao
 * @property Cidade $cidade
 * @property Credordevedor[] $credordevedors
 * @property Lancamento[] $lancamentos
 * @property Planoconta[] $planocontas
 * @property Resultadomensal[] $resultadomensals
 * @property Retencao[] $retencaos
 * @property Usuario[] $usuarios
 */
class Cliente extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cliente';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome'], 'required'],
            [['idCidade', 'idAssociacao'], 'integer'],
            [['nome', 'bairro', 'email'], 'string', 'max' => 120],
            [['cnpj'], 'string', 'max' => 14],
            [['endereco'], 'string', 'max' => 255],
            [['complemento'], 'string', 'max' => 30],
            [['telefone'], 'string', 'max' => 20],
            [['idAssociacao'], 'exist', 'skipOnError' => true, 'targetClass' => Associacao::className(), 'targetAttribute' => ['idAssociacao' => 'id']],
            [['idCidade'], 'exist', 'skipOnError' => true, 'targetClass' => Cidade::className(), 'targetAttribute' => ['idCidade' => 'id']],
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
            'cnpj' => 'Cnpj',
            'idCidade' => 'Id Cidade',
            'endereco' => 'Endereco',
            'complemento' => 'Complemento',
            'bairro' => 'Bairro',
            'telefone' => 'Telefone',
            'email' => 'Email',
            'idAssociacao' => 'Id Associacao',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBancos()
    {
        return $this->hasMany(Banco::className(), ['idCliente' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAssociacao()
    {
        return $this->hasOne(Associacao::className(), ['id' => 'idAssociacao']);
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
    public function getCredordevedors()
    {
        return $this->hasMany(Credordevedor::className(), ['idCliente' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLancamentos()
    {
        return $this->hasMany(Lancamento::className(), ['idCliente' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPlanocontas()
    {
        return $this->hasMany(Planoconta::className(), ['idCliente' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getResultadomensals()
    {
        return $this->hasMany(Resultadomensal::className(), ['idCliente' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRetencaos()
    {
        return $this->hasMany(Retencao::className(), ['idCliente' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsuarios()
    {
        return $this->hasMany(Usuario::className(), ['idCliente' => 'id']);
    }
}
