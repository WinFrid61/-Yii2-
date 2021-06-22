<?php
namespace app\models;
use yii\base\Model;
class zap5 extends Model
{	
	public $type;
	public $startDate;
 	public $endDate;

    public function rules(){
        return [
            [['type','startDate','endDate'], 'trim'],
        ];
    }
}