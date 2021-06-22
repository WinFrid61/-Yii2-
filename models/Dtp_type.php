<?php
namespace app\models;
use yii\db\ActiveRecord;
class Dtp_type extends ActiveRecord
{		
	public function getDtp()
		{
			return $this->hasMany(Dtp::className(), ['DTP_Id' => 'Type_Id']);
		}
}
