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
		
		<h1>Запрос - Перечень и общее число организаций с указанной серией или датой</h1>
		
		<?php 
			$form = ActiveForm::begin(); ?>
    
		<? 
			echo $form->field($model, 'serial')->dropDownList($serial)->label('Выберите серию');
			echo $form->field($model, 'startDate')->input('date')->label('Выберите начало периода');
			echo $form->field($model, 'endDate')->input('date')->label('Выберите конец периода');
		?>   
		<div class="form-group">
			<?= Html::submitButton('Найти', ['class' => 'primary-btn']) ?>
		</div>
  
		<?php ActiveForm::end(); ?>
		
		<?php 
			if (Yii::$app->session->hasFlash('error')) { ?>
				<div class="alert alert-error alert-dismissible" role="alert">
				<? echo Yii::$app->session->getFlash('error');   }
				else if ($model->load(Yii::$app->request->post()) && $model->validate()) { ?>
			</div>
		
			<table class="table table-striped table-bordered">
				<thead>
					<tr>
					<th> Организация (Всего: <?=$counter ?>) </th>
					<th> Улица </th>
					<th> Директор </th>
					</tr>
				</thead>
				<tbody>
				<?//= var_dump($tabl) ?>
				<?php foreach ($tabl as $tb): ?>
					<tr>
						<td> <?= Html::encode("{$tb->Name}")?></td>
						<td> <?= Html::encode("{$tb->org_dtp_street['Street']}")?></td>
						<td> <?= Html::encode("{$tb->Director_FIO}")?></td>
					</tr>
				<?php endforeach; ?>
				</tbody>
			</table>
			<?php } ?>
		</div>
	</div>
</section>