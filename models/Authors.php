<?php
namespace app\models;
use yii\db\ActiveRecord;
use app\models\Books;
class Authors extends ActiveRecord
{
	public function getBooks()
		{
			return $this->hasMany(Books::className(), ['author' => 'id']);
		}
}
