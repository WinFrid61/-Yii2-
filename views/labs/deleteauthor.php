<?php
   use yii\helpers\Html;
   use yii\widgets\LinkPager;
   use yii\widgets\ActiveForm;
   ?>
   
<?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'id')->label('ID автора'); ?>

        <div class="form-group">
            <?= Html::submitButton('Удалить', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

<p></p>	
<a class="btn btn-success btn-lg" href="/basic/web/index.php?r=labs/lab2" role="button">На главную</a>