<?php
namespace app\models;
use yii\db\ActiveRecord;
class Transport extends ActiveRecord
{
	public function getTransport_num()
		{
			return $this->hasOne(transport_num::className(), ['Num_Id' => 'Num_id']);
		}
	public function getTransport_signal() 
		{
			return $this->hasOne(transport_signal::className(), ['Signal_Id' => 'Signal_id']);
		}
	public function getTransport_type() 
		{
			return $this->hasOne(transport_type::className(), ['Type_Id' => 'Type_id']);
		}
	public function getDriver()
		{
			return $this->hasMany(driver::className(), ['Transport_Id' => 'Transport_Id'])
			->viaTable('transport_driver', ['Driver_Id'=>'Driver_Id']);
		}
	public function getTransport_osmotr() 
		{
			return $this->hasMany(transport_osmotr::className(), ['Transport_Id' => 'Transport_Id']);
		}
	public function getRozisk() 
		{
			return $this->hasMany(rozisk::className(), ['Transport_Id' => 'Transport_Id']);
		}
	public function getDtp()				
		{
			return $this->hasMany(dtp::className(), ['DTP_Id' => 'DTP_Id'])
			->viaTable('transport_dtp', ['Transport_Id'=>'Transport_Id']);
		}

}
