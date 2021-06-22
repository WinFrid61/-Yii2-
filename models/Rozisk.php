<?php
namespace app\models;
use yii\db\ActiveRecord;
class Rozisk extends ActiveRecord
{
	public function getTransport()
		{
			return $this->hasOne(Transport::className(), ['Transport_Id' => 'Transport_Id']);
		}
	public function getDtp_rozisk_reason()
		{
			return $this->hasOne(dtp_rozisk_reason::className(), ['Reason_Id' => 'Reason_Id']);
		}
	public function getOrg_dtp_street()
		{
			return $this->hasOne(org_dtp_street::className(), ['Id' => 'Street_Id']);
		}
}
