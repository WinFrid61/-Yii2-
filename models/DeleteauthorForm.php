<?php

namespace app\models;

use yii\base\Model;

class DeleteAuthorForm extends Model
{
    public $id;

    public function rules()
    {
        return [
            [['id'], 'required', 'message' => 'Пожалуйста, заполните поле']];
    }
}
