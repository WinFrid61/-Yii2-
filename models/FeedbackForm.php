<?php

namespace app\models;

use Yii;
use yii\base\Model;

class FeedbackForm extends Model
{
    public $name;
    public $email;
    public $age;
    public $date;
    public $fav_kitchen;
    public $Recommend;
    public $FeedBack;

    public function rules()
    {
        return [
            [['name', 'email', 'age', 'date', 'fav_kitchen', 'Recommend', 'FeedBack'], 'required', 'message' => 'Поле не заполнено', ],
            ['email', 'email' , 'message' => 'e-mail заполнен некорректно'],
            [['age'],'number', 'min'=>18 ,'max'=>100, 'tooBig' => 'Возраст не должен быть больше 100', 'tooSmall' => 'Возраст не должен быть меньше 18'],
            [['date'],'date', 'format'=>'dd.mm.yyyy', 'message' => 'Формат даты неправильный'],
			[['FeedBack'], 'trim']
         ];
    }
}