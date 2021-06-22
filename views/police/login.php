<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\PoliceAsset;
use yii\widgets\ActiveForm;

$this->title = 'Авторизация';
$this->params['breadcrumbs'][] = 'Админка';
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

			<p>Пожалуйста, заполните поля ниже для входа:</p>

			<?php $form = ActiveForm::begin([
				'id' => 'login-form',

			]); ?>

			<?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>
			<p></p>
			<?= $form->field($model, 'password')->passwordInput() ?>

			<?= $form->field($model, 'rememberMe')->checkbox([
            'template' => "<div class=\"col-lg-offset-1 col-lg-3\">{input} {label}</div>\n<div class=\"col-lg-8\">{error}</div>",
			]) ?>

			<?= Html::SubmitButton('Войти', ['class' => 'btn btn-success btn-large', 'name' => 'login-button']) ?>

		<?php ActiveForm::end(); ?>
		</div>
	</div>
</section>
