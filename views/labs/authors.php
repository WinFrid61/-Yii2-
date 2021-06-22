<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<h1>Авторы</h1>
<table class="table table-striped table-bordered">
	<thead> 
		<tr>
	        <th>Имя</th>
	        <th>Дата рождения</th>
			<th>Дата смерти</th>
	    </tr>
	</thead>
	<tbody>
	

<?php foreach ($authors as $author): ?>
    <tr>
        <td><?= Html::encode("{$author->name}") ?> </td>
        <td><?= Html::encode("{$author->birth}") ?></td>
		<td><?= Html::encode("{$author->dead}") ?></td>
    </tr>
<?php endforeach; ?>
</tbody>
</table>
<?= LinkPager::widget(['pagination' => $pagination]) ?>
<p></p>
<a class="btn btn-success btn-lg" href="/basic/web/index.php?r=labs/genres" role="button">Вперед</a>
<a class="btn btn-success btn-lg" href="/basic/web/index.php?r=labs/lab2" role="button">На главную</a>
