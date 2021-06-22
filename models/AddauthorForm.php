<?php

namespace app\models;

use yii\base\Model;

class AddauthorForm extends Model
{
    public $name;
	public $birth;
	public $dead;

    public function rules()
    {
        return [
            [['name', 'birth'], 'required', 'message' => 'Пожалуйста, заполните поле'],
			[['dead'], 'default']];

    }
}
