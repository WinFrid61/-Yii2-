<?php
namespace app\models;
use yii\db\ActiveRecord;
class Org_dtp_street extends ActiveRecord
{
	public function getOrganization()
		{
			return $this->hasMany(Organization::className(), ['Id' => 'Id']);
		}
		
	public function getDtp()
		{
			return $this->hasMany(Dtp::className(), ['DTP_Id' => 'Id']);
		}
	public function getRozisk()
		{
			return $this->hasMany(rozisk::className(), ['Street_Id' => 'Id']);
		}
}
