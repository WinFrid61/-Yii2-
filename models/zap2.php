<?php
namespace app\models;
use yii\base\Model;
class zap2 extends Model
{	
	public $number;

    public function rules(){
        return [
            ['number', 'trim'],
        ];
    }
}
