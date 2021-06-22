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
		
		<h1>Запрос - Досье на ТС по гос. номеру</h1>
		
		<?php 
			$form = ActiveForm::begin(); ?>
    
		<? 
			echo $form->field($model, 'number')->dropDownList($number)->label('Выберите гос. номер ТС');
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
					<th> Номер двигателя </th>
					<th> Номер шасси </th>
					<th> Номер кузова </th>
					<th> Техосмотр </th>
					<th> ДТП </th>
					</tr>
				</thead>
				<tbody>
				<?//= var_dump($tabl) ?>
				<?php foreach ($tabl as $tb): ?>
					<tr>
						<td> <?= Html::encode("{$tb->Num_engine}")?></td>
						<td> <?= Html::encode("{$tb->Num_chassi}")?></td>
						<td> <?= Html::encode("{$tb->Num_kuzov}")?></td>
						<td> <?= Html::encode("{$tb->transport_osmotr[0]['Proideno']}")?></td>
						<td> <?= Html::encode("{$tb->dtp[0]['Desc']}")?></td> 
					</tr>
				<?php endforeach; ?>
				</tbody>
			</table>
			<?php } ?>
		</div>
	</div>
</section>