<?php
namespace app\models;
use yii\db\ActiveRecord;
class Num_serial extends ActiveRecord
{
	public function getTransport_Num()
		{
			return $this->hasOne(transport_num::className(), ['Serial_Id' => 'Serial_Id']);
		}
}
