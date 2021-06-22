<?php
namespace app\models;
use yii\db\ActiveRecord;
class Num_region extends ActiveRecord
{
	public function getTransport_Num()
		{
			return $this->hasOne(transport_num::className(), ['Region_Id' => 'Region_Id']);
		}
}
