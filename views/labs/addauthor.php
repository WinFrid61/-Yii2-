<?php
   use yii\helpers\Html;
   use yii\widgets\LinkPager;
   use yii\widgets\ActiveForm;
   ?>
   
<?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'name')->label('Имя автора'); ?>
        <?= $form->field($model, 'birth')->label('Дата рождения')->input('date'); ?>
		<?= $form->field($model, 'dead')->label('Дата смерти (опционально)')->input('date'); ?>

        <div class="form-group">
            <?= Html::submitButton('Добавить', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>
	
<p></p>
<a class="btn btn-success btn-lg" href="/basic/web/index.php?r=labs/lab2" role="button">На главную</a>
<a class="btn btn-success btn-lg" href="/basic/web/index.php?r=labs/addauthor" role="button">Обновить</a>