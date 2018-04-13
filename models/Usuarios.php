<?php

namespace app\models;

use Yii;
use yii\web\IdentityInterface;

/**
 * This is the model class for table "usuarios".
 *
 * @property int $id
 * @property string $nombre
 * @property string $apellidos
 * @property string $email
 * @property string $password
 * @property string $created_at
 * @property string $updated_at
 * @property string $auth_key
 * @property string $rol
 */
class Usuarios extends \yii\db\ActiveRecord implements IdentityInterface
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'usuarios';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre', 'email', 'password'], 'required'],
            [['created_at', 'updated_at'], 'safe'],
            [['nombre', 'apellidos', 'email', 'password', 'auth_key', 'rol'], 'string', 'max' => 255],
            [['email'], 'unique'],
            [['nombre'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombre' => 'Nombre',
            'apellidos' => 'Apellidos',
            'email' => 'Email',
            'password' => 'Password',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'auth_key' => 'Auth Key',
            'rol' => 'Rol',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public static function findIdentity($id)
    {
        return static::findOne($id);
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
    }

    /**
     * {@inheritdoc}
     */
    public function validateAuthKey($authKey)
    {
    }

    /**
     * Este método valida la contraseña comparándola con la codificada en la BD.
     *
     * @param string $password La contraseña que se validará
     */
    public function validatePassword($password)
    {
        return Yii::$app->security->validatePassword(
            $password, $this->password
        );
    }
}
