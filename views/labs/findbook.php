<?php
   use yii\helpers\Html;
   use yii\widgets\LinkPager;
   use yii\widgets\ActiveForm;
   ?>
   
  <h1>Поиск книги по названию</h1>
  
   <table class="table table-striped">
      <thead>
         <tr>
            <th>Название</th>
            <th>Описание</th>
            <th>Дата публикации</th>
            <th>Автор</th>
            <th>Жанр</th>
         </tr>
      </thead>
      <?php foreach ($books as $book): ?>
      <tbody>
         <tr>
            <td><?= Html::encode("{$book->name}")?></td>
			<td><?= Html::encode("{$book->desc}")?></td>
            <td><?= Html::encode("{$book->rel}")?></td>
            <td><?= Html::encode("{$book->authors->name}")?></td>
            <td><?= Html::encode("{$book->genres->name}")?></td>
         </tr>
         <?php endforeach; ?>
      </tbody>
   </table>
   
   
<?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'name')->hint('Введите ключевое слово')->label('Поиск'); ?>

        <div class="form-group">
            <?= Html::submitButton('Найти', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>
	
<p></p>
<a class="btn btn-success btn-lg" href="/basic/web/index.php?r=labs/bookscount" role="button">Назад</a>
<a class="btn btn-success btn-lg" href="/basic/web/index.php?r=labs/lab2" role="button">На главную</a>