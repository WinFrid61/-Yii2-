<?php
namespace app\models;
use yii\db\ActiveRecord;
class Transport_type extends ActiveRecord
{
	public function getTransport()
		{
			return $this->hasMany(transport::className(), ['Type_id' => 'Type_id']);
		}
		
	public function getTransport_num()
		{
			return $this->hasMany(transport_num::className(), ['Type_Id' => 'Type_id']);
		}
}
