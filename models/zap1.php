<?php
namespace app\models;
use yii\base\Model;
class zap1 extends Model
{	
	public $serial;
	public $startDate;
 	public $endDate;

    public function rules(){
        return [
            [['serial','startDate','endDate'], 'trim'],
        ];
    }
}
