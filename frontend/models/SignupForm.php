<?php
namespace frontend\models;

use yii\base\Model;
use common\models\User;

/**
 * Signup form
 */
class SignupForm extends Model
{
    public $username;
    public $email;
    public $password;
    public $f_name;
    public $dob;
    public $address;


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['username', 'trim'],
            ['username', 'required'],
            ['username', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This username has already been taken.'],
            ['username', 'string', 'min' => 2, 'max' => 255],

            ['email', 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This email address has already been taken.'],

            ['password', 'required'],
            ['password', 'string', 'min' => 6],

            [['f_name','dob','address'],'safe',],
        ];
    }

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup()
    {
        if (!$this->validate()) {
            return null;
        }
        
        $user = new User();
        $user->username = $this->username;
        $user->email = $this->email;
        $user->setPassword($this->password);
        $user->generateAuthKey();
        $user->created_at = date('y-md',time());
        $user->updated_at = date('y-md',time());
        $user->dob = $this->dob;
        $user->f_name = $this->f_name;
        $user->address = $this->address;


        return $user->save() ? $user : null;
    }
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Name',
            'user_type_id' => 'User Type ID',
            'password_hash' => 'Password',

            'email' => 'Email',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'f_name' => 'Father Name',
            'address' => 'Address',
            'dob' => 'Date of Birth',
        ];
    }
}
