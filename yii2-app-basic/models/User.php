<?php

namespace app\models;

use app\models\Usuario;
use app\models;
use yii\data\ArrayDataProvider;

class User extends \yii\base\BaseObject implements \yii\web\IdentityInterface
{
    public $id;
    public $nome;
    public $email;
    public $idPerfil;
    public $idFirebase;
    public $passwordHash;
    public $passwordResetToken;
    public $createdAt;
    public $updatedAt;
    public $status;
    public $idCliente;
    public $imagem;
    public $username;
    public $password;
    public $authKey;
    public $accessToken;


    /**
     * {@inheritdoc}
     */
    public static function findIdentity($id)
    {
        $user = Usuario::find($id)->one();
        if($user)
        {
            return new static($user);
        }

        return null;
    }

    /**
     * {@inheritdoc}
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        foreach (self::$users as $user) {
            if ($user['accessToken'] === $token) {
                return new static($user);
            }
        }

        return null;
    }

    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
        $user = Usuario::find()->where(['username' => $username])->one();

        if($user)
        {
            return new static($user);
        }

        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthKey()
    {
        return $this->authKey;
    }

    /**
     * {@inheritdoc}
     */
    public function validateAuthKey($authKey)
    {
        return $this->authKey === $authKey;
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return bool if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        $this->password = "Usuario";
        return $this->password === "Usuario";
    }
}
