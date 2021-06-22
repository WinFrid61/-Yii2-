<?php
namespace app\models;
use yii\base\Model;
class zap10 extends Model
{	
	public $startDate;
 	public $endDate;

    public function rules(){
        return [
            [['startDate','endDate'], 'trim'],
        ];
    }
}
