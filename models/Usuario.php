<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usuario".
 *
 * @property int $id
 * @property int $idPerfil
 * @property string $nome
 * @property string $email
 * @property string $idFirebase
 * @property string $authKey
 * @property string $passwordHash
 * @property string $passwordResetToken
 * @property string $createdAt
 * @property string $updatedAt
 * @property int $status
 * @property int $idCliente
 * @property string $username
 * @property string $imagem
 *
 * @property Associacao $associacao
 * @property Cliente $cliente
 */
class Usuario extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'usuario';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idPerfil', 'nome', 'email', 'authKey', 'passwordHash', 'passwordResetToken', 'createdAt', 'updatedAt', 'username'], 'required'],
            [['idPerfil', 'createdAt', 'updatedAt', 'status', 'idCliente'], 'integer'],
            [['nome', 'email', 'imagem'], 'string', 'max' => 120],
            [['idFirebase', 'passwordHash', 'passwordResetToken'], 'string', 'max' => 255],
            [['authKey'], 'string', 'max' => 32],
            [['username'], 'string', 'max' => 60],
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
            'idPerfil' => 'Id Perfil',
            'nome' => 'Nome',
            'email' => 'Email',
            'idFirebase' => 'Id Firebase',
            'authKey' => 'Auth Key',
            'passwordHash' => 'Password Hash',
            'passwordResetToken' => 'Password Reset Token',
            'createdAt' => 'Created At',
            'updatedAt' => 'Updated At',
            'status' => 'Status',
            'idCliente' => 'Id Cliente',
            'username' => 'Username',
            'imagem' => 'Imagem',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAssociacao()
    {
        return $this->hasOne(Associacao::className(), ['id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCliente()
    {
        return $this->hasOne(Cliente::className(), ['id' => 'idCliente']);
    }
}
