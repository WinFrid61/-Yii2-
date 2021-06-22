<?php
namespace app\models;
use yii\db\ActiveRecord;
class Driver extends ActiveRecord
{
	public function getOrganization()
		{
			return $this->hasOne(Organization::className(), ['Id' => 'Org_Id']);
		}
		
	public function getTransport()
		{
			return $this->hasMany(Transport::className(), ['Transport_Id' => 'Transport_Id'])
			->viaTable('transport_driver', ['Driver_Id'=>'Driver_Id']);
		}
}
