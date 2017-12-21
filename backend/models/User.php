<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property integer $id
 * @property string $username
 * @property integer $user_type_id
 * @property string $auth_key
 * @property string $password_hash
 * @property string $password_reset_token
 * @property string $email
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 *
 * @property Teacher[] $teachers
 * @property UserType $userType
 */
class User extends \yii\db\ActiveRecord
{
    public $newpassword;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }
    /**
     * @inheritdoc
     */
    public function getAuthKey()
    {
        return $this->auth_key;
    }
    /**
     * Generates "remember me" authentication key
     */
    public function generateAuthKey()
    {
        $this->auth_key = Yii::$app->security->generateRandomString();
    }
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'email', ], 'required'],
            [['user_type_id', 'status',], 'integer'],
            [['username', 'password_hash', 'password_reset_token', 'email', 'f_name', 'address'], 'string', 'max' => 255],
            [['auth_key'], 'string', 'max' => 32],
            [['username'], 'unique'],
            [['email'], 'unique'],
            [['created_at', 'updated_at', 'dob'], 'safe'],
            [['password_reset_token'], 'unique'],
            [['user_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => UserType::className(), 'targetAttribute' => ['user_type_id' => 'user_type_id']],
            ['password_hash', 'required'],
            ['password_hash', 'string', 'min' => 6],
//            ['newpassword', 'required'],
//            ['newpassword', 'string', 'min' => 6],
            ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'user_type_id' => 'User Type ID',
            'password_hash' => 'Password',
//            'newpassword'=>'Update Passowrd',
            'email' => 'Email',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'f_name' => 'Father Name',
            'address' => 'Address',
            'dob' => 'Date of Birth',
        ];
    }


    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeachers()
    {
        return $this->hasMany(Teacher::className(), ['teacher_user_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUserType()
    {
        return $this->hasOne(UserType::className(), ['user_type_id' => 'user_type_id']);
    }

}
