<?php
namespace app\models;
use yii\db\ActiveRecord;
class Dtp extends ActiveRecord
{		
	public function getTransport()
		{
			return $this->hasMany(transport::className(), ['Transport_Id' => 'Transport_Id'])
			->viaTable('transport_dtp', ['DTP_Id'=>'DTP_Id']);
		}
	public function getDtp_rozisk_reason()
		{
			return $this->hasOne(dtp_rozisk_reason::className(), ['Reason_Id' => 'Reason_Id']);
		}
	public function getDtp_type()
		{
			return $this->hasOne(dtp_type::className(), ['Type_Id' => 'Type_Id']);
		}
	public function getOrg_dtp_street()
		{
			return $this->hasOne(org_dtp_street::className(), ['Id' => 'DTP_Id']);
		}
}
