<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<h1>Жанры</h1>
<table class="table table-striped table-bordered">
	<thead> 
		<tr>
	        <th>Название</th>
	    </tr>
	</thead>
	<tbody>
	

<?php foreach ($genres as $genre): ?>
    <tr>
        <td><?= Html::encode("{$genre->name}") ?> </td>
    </tr>
<?php endforeach; ?>
</tbody>
</table>
<?= LinkPager::widget(['pagination' => $pagination]) ?>
<p></p>
<a class="btn btn-success btn-lg" href="/basic/web/index.php?r=labs/authors" role="button">Назад</a>
<a class="btn btn-success btn-lg" href="/basic/web/index.php?r=labs/books" role="button">Вперед</a>
<a class="btn btn-success btn-lg" href="/basic/web/index.php?r=labs/lab2" role="button">На главную</a>
