<?php
namespace app\models;
use yii\db\ActiveRecord;
class Transport_signal extends ActiveRecord
{
	public function getTransport()
		{
			return $this->hasMany(transport::className(), ['Signal_id' => 'Signal_Id']);
		}
}
