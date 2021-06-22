<?php
 
namespace app\models;
 
use Yii;
use yii\base\NotSupportedException;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

class User extends ActiveRecord implements IdentityInterface
{

    public static function tableName()
    {
        return '{{%users2}}';
    }
 
    public static function findIdentity($id)
    {
        return static::findOne(['id' => $id]); 
    }
 

    public static function findIdentityByAccessToken($token, $type = null)
    {
     
    }
 

    public static function findByUsername($username)
    {
        return static::findOne(['username' => $username]);
    }
 
    public function getId()
    {
        return $this->getPrimaryKey();
    }
 

    public function getAuthKey()
    {
        return $this->auth_key;
    }
 

    public function validateAuthKey($authKey)
    {
        return $this->getAuthKey() === $authKey;
    }
 

    public function validatePassword($password)
    {
        return Yii::$app->security->validatePassword($password, $this->password_hash);
    }
 

    public function generateAuthKey()
    {
        $this->auth_key = Yii::$app->security->generateRandomString();
    }
 
    public function setPassword($password)
    {
        $this->password_hash = Yii::$app->security->generatePasswordHash($password);
    }
}