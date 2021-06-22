<?php
namespace app\models;
use yii\base\Model;
class Zap8 extends Model
{	
	public $rozisk;

    public function rules(){
        return [
            ['rozisk', 'trim'],
        ];
    }
}
