<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<h1>Книги</h1>
<table class="table table-striped table-bordered">
	<thead> 
		<tr>
	        <th>Название</th>
			<th>Описание</th>
	        <th>Дата публикации</th>
			<th>Автор</th>
			<th>Жанр</th>
	    </tr>
	</thead>
	<tbody>
	
	
<?php foreach ($books as $book): ?>
    <tr>
        <td><?= Html::encode("{$book->name}") ?> </td>
        <td><?= Html::encode("{$book->desc}") ?></td>
		<td><?= Html::encode("{$book->rel}") ?></td>
		<td><?= Html::encode("{$book->authors->name}") ?></td>
		<td><?= Html::encode("{$book->genres->name}") ?></td>
    </tr>
<?php endforeach; ?>
</tbody>
</table>
<?= LinkPager::widget(['pagination' => $pagination]) ?>
<p></p>
<a class="btn btn-success btn-lg" href="/basic/web/index.php?r=labs/genres" role="button">Назад</a>
<a class="btn btn-success btn-lg" href="/basic/web/index.php?r=labs/lab2" role="button">На главную</a>
