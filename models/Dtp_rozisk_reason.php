<?php
namespace app\models;
use yii\db\ActiveRecord;
class Dtp_rozisk_reason extends ActiveRecord
{		
	public function getDtp()
		{
			return $this->hasMany(Dtp::className(), ['DTP_Id' => 'Reason_Id']);
		}
	public function getRozisk()
		{
			return $this->hasMany(rozisk::className(), ['Reason_Id' => 'Reason_Id']);
		}
}
