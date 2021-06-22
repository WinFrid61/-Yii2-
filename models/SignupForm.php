<?php
 
namespace app\models;
 
use Yii;
use yii\base\Model;
 
/**
 * Signup form
 */
class SignupForm extends Model
{
 
    public $username;
    public $email;
    public $password;
 
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['username', 'trim'],
            ['username', 'required', 'message' => 'Логин не указан!'],
            ['username', 'unique', 'targetClass' => '\app\models\User', 'message' => 'Этот логин уже используется.'],
            ['username', 'string', 'min' => 2, 'max' => 255],
            ['email', 'trim'],
            ['email', 'required', 'message' => 'E-Mail не указан!'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\app\models\User', 'message' => 'Этот E-Mail уже используется.'],
            ['password', 'required', 'message' => 'Пароль не указан!'],
            ['password', 'string', 'min' => 6],
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
 
        $users2 = new User();
        $users2->username = $this->username;
        $users2->email = $this->email;
        $users2->setPassword($this->password);
        $users2->generateAuthKey();
        return $users2->save() ? $users2 : null;
    }
 
}