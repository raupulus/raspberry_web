<?php

namespace app\models;

use Yii;

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
class Usuarios extends \yii\db\ActiveRecord
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
}
