<?php

namespace app\models;

use yii\base\Model;

class FindbookForm extends Model
{
    public $name;

    public function rules()
    {
        return [
            [['name'], 'required', 'message' => 'Пожалуйста, заполните поле']];
    }
}
