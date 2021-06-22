<?php
namespace app\models;
use yii\db\ActiveRecord;
class Transport_num extends ActiveRecord
{
	public function getTransport()
		{
			return $this->hasMany(transport::className(), ['Num_id' => 'Num_Id']);
		}
		
	public function getTransport_Type()
		{
			return $this->hasOne(transport_type::className(), ['Type_id' => 'Type_Id']);
		}
		
	public function getNum_Serial()
		{
			return $this->hasOne(num_serial::className(), ['Serial_Id' => 'Serial_Id']);
		}
		
	public function getNum_Region()
		{
			return $this->hasOne(num_region::className(), ['Region_Id' => 'Region_Id']);
		}
}
