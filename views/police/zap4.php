<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\PoliceAsset;
use yii\widgets\ActiveForm;

$this->title = 'ГИБДД - запросы';
?>

<section class="main-info">
	<div class="container">
		<div class="center gap">
		
		<h1>Запрос - Список автовладельцев, не прошедших техосмотр</h1>
		
			<table class="table table-striped table-bordered">
				<thead>
					<tr>
					<th> Фамилия водителя (Всего: <?=$counter ?>) </th>
					<th> Имя </th>
					<th> Отчество </th>
					<th> Дата рождения </th>
					<th> Организация </th>
					</tr>
				</thead>
				<tbody>
				<?//= var_dump($tabl) ?>
				<?php foreach ($tabl as $tb): ?>
					<tr>
						<td> <?= Html::encode("{$tb->Surname}")?></td>
						<td> <?= Html::encode("{$tb->Name}")?></td>
						<td> <?= Html::encode("{$tb->MidName}")?></td>
						<td> <?= Html::encode("{$tb->BirthDate}")?></td>
						<td> <?= Html::encode("{$tb->organization['Name']}")?></td>
					</tr>
				<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</section>