<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\PoliceAsset;
use yii\widgets\ActiveForm;

$this->title = 'Регистрация';
$this->params['breadcrumbs'][] = 'Регистрация';
?>
<style>
	
	input[type="text"] {
font-size: 18px;
height: 10px;
width: 300px;
}
	input[type="password"] {
font-size: 18px;
height: 10px;
width: 300px;
}
</style>

<section class="main-info">
	<div class="container">
		<div class="center gap">
			<h1><?= Html::encode($this->title) ?></h1>

			<p>Пожалуйста, заполните поля ниже для регистрации:</p>
			
			<?php $form = ActiveForm::begin([
				'id' => 'login-form',

			]); ?>

			<?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>
            <?= $form->field($model, 'email') ?>
            <?= $form->field($model, 'password')->passwordInput() ?>

			<?= Html::submitButton('Зарегистрироваться', ['class' => 'btn btn-success btn-large', 'name' => 'signup-button']) ?>

		<?php ActiveForm::end(); ?>
		</div>
	</div>
</section>