<?php
namespace app\models;
use yii\db\ActiveRecord;
class Organization extends ActiveRecord
{
	public $cnt;
	
	public function getDriver()
		{
			return $this->hasMany(Driver::className(), ['Org_Id' => 'Id']);
		}
		
	public function getOrg_dtp_street()
		{
			return $this->hasOne(Org_dtp_street::className(), ['Id' => 'Id']);
		}
}
