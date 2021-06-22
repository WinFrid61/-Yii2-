<?php
namespace app\models;
use yii\db\ActiveRecord;
class Transport_osmotr extends ActiveRecord
{
	public function getTransport()
		{
			return $this->hasMany(transport::className(), ['Transport_Id' => 'Transport_Id']);
		}
}
