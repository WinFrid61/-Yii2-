<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
$this->title = 'Лабораторная работа №1';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="alert alert-success">
   Лабораторная работа №1
</div>

<div class="container"> 
	<div class="row">
		<div class="col-lg-6">
		<h3> Отзыв о ресторане </h3>
<?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->label('Ваше Имя:') ?>
    <?= $form->field($model, 'email')->label('Ваш e-mail:') ?>
    <?= $form->field($model, 'age')->label('Ваш Возраст:')->hint('Возраст может быть от 18 до 100')?>
    <?= $form->field($model, 'date')->label('Дата посещения')->input('date')?>
    <?= $form->field($model, 'fav_kitchen')->label('Любимая кухня:')->dropdownlist([
     	'Русская' => 'Русская',
    	'Японская' => 'Японская',
    	'Турецкая' => 'Турецкая',
    	'Польская' => 'Польская']
    ) ?>
    <?= $form->field($model, 'Recommend')->label('Порекомендуете нас друзьям?')
    	->radiolist([ 
    		'1' => 'Да',
        	'2' => 'Нет'
        ]) ?>
    <?= $form->field($model, 'FeedBack')->label('Текст отзыва:')->textarea() ?>

	    <div class="form-group">
	        <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary']) ?>
	    </div>
	    <?php ActiveForm::end(); ?>
	</div>

		<?php if (Yii::$app->session->hasFlash('FeedbackSubmitted')): ?>
	<div class="col-lg-6">

		<h3>Переданный отзыв</h3>
		<table class="table table-striped table-bordered">
			<tbody>
    <tr>
      <th class="col-lg-9">Ваше имя:</th>
      <td> <?= Html::encode($model->name) ?></td>
    </tr>
    <tr>
      <th>Ваш e-mail:</th>
      <td> <?= Html::encode($model->email) ?></td>
    </tr>
    <tr>
      <th>Дата посещения:</th>
      <td> <?= Html::encode($model->date) ?></td>
    </tr>
    <tr>
      <th>Ваш возраст:</th>
      <td> <?= Html::encode($model->age) ?></td>
    </tr>
    <tr>
      <th>Любимая кухня:</th>
      <td> <?= Html::encode($model->fav_kitchen) ?></td>
    </tr>
    <tr>
      <th>Порекомендуете нас друзьям?</th>
      <td> <?= Html::encode($model->Recommend) ?></td>
    </tr>
    <tr>
      <th>Текст отзыва:</th>
      <td> <?= Html::encode($model->FeedBack) ?></td>
    </tr>
</tbody>
		</table>
	</div>
</div>
    <?php endif; ?>
</div>