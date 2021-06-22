<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<h1>Количество книг авторов</h1>

<table class="table table-striped table-bordered">
	<thead> 
		<tr>
	        <th>Имя автора</th>
	        <th>Количество книг</th>
	    </tr>
	</thead>
	<tbody>
	
	<?php foreach ($countb as $count): ?>
	<tr>
      <td> <?= Html::encode("{$count->name}") ?></td>
      <td> <?= count($count->books) ?></td>
    </tr>
<?php endforeach; ?>
	</tbody>
</table>

<a class="btn btn-success btn-lg" href="/basic/web/index.php?r=labs/sortirovka" role="button">Назад</a>
<a class="btn btn-success btn-lg" href="/basic/web/index.php?r=labs/findbook" role="button">Вперед</a>
<a class="btn btn-success btn-lg" href="/basic/web/index.php?r=labs/lab2" role="button">На главную</a>