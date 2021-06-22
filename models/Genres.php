<?php
namespace app\models;
use yii\db\ActiveRecord;
use app\models\Books;
class Genres extends ActiveRecord
{
	public function getBooks()
		{
			return $this->hasMany(Books::className(), ['genre' => 'id']);
		}
}
