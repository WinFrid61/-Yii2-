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
		
		<h1>Запрос - Машины в розыске</h1>
		
		<?php 
			$form = ActiveForm::begin(); ?>
    
		<? 
			echo $form->field($model, 'rozisk')->dropDownList($rozisk)->label('Выберите тип ДТП');
		?>   
		<div class="form-group">
			<?= Html::submitButton('Найти', ['class' => 'primary-btn']) ?>
		</div>
  
		<?php ActiveForm::end(); ?>
		
		<?php 
			if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->rozisk != "Не выбрано") { ?>
			</div>
		
			<table class="table table-striped table-bordered">
				<thead>
					<tr>
					<th> Объявлено в розыск (Всего: <?=$counter ?>) </th>
					<th> Транспорт </th>
					<th> Улица </th>
					<th> Найдено </th>
					</tr>
				</thead>
				<tbody>
				<?//= var_dump($tabl) ?>
				<?php foreach ($tabl as $tb): ?>
					<tr>
						<td> <?= Html::encode("{$tb->Rozisk_date}")?></td>
						<td> <?= Html::encode("{$tb->transport['Model']}")?></td>
						<td> <?= Html::encode("{$tb->org_dtp_street['Street']}")?></td>
						<td> <?= Html::encode("{$tb->Nashli}")?></td>
					</tr>
				<?php endforeach; ?>
				</tbody>
			</table>
			<?php } else {  ?>
			<table class="table table-striped table-bordered">
				<thead>
					<tr>
					<th> Объявлено в розыск (Всего: <?=$counter ?>) </th>
					<th> Причина </th>
					<th> Транспорт </th>
					<th> Улица </th>
					<th> Найдено </th>
					</tr>
				</thead>
				<tbody>
				<?//= var_dump($tabl) ?>
				<?php foreach ($tabl as $tb): ?>
					<tr>
						<td> <?= Html::encode("{$tb->Rozisk_date}")?></td>
						<td> <?= Html::encode("{$tb->dtp_rozisk_reason['Reason']}")?></td>
						<td> <?= Html::encode("{$tb->transport['Model']}")?></td>
						<td> <?= Html::encode("{$tb->org_dtp_street['Street']}")?></td>
						<td> <?= Html::encode("{$tb->Nashli}")?></td>
					</tr>
				<?php endforeach; ?>
				</tbody>
			</table>
			<?php } ?>
		</div>
	</div>
</section>