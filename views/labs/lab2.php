<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Лабораторная работа №2';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="alert alert-success">
   Лабораторная работа №2
</div>
<h1>Таблицы</h1>
	<a class="btn btn-success btn-lg" href="/basic/web/index.php?r=labs/authors" role="button">Авторы</a>
	<a class="btn btn-success btn-lg" href="/basic/web/index.php?r=labs/genres" role="button">Жанры</a>
	<a class="btn btn-success btn-lg" href="/basic/web/index.php?r=labs/books" role="button">Книги</a>

<h1>Запросы</h1>
	<a class="btn btn-success btn-lg" href="/basic/web/index.php?r=labs/sortirovka" role="button">Книги, написанные в 20-м веке</a>
	<a class="btn btn-success btn-lg" href="/basic/web/index.php?r=labs/bookscount" role="button">Кол-во книг авторов</a>
	<a class="btn btn-success btn-lg" href="/basic/web/index.php?r=labs/findbook" role="button">Поиск книги по ключ. слову</a>

<h1>Редактирование таблиц</h1>
	<a class="btn btn-success btn-lg" href="/basic/web/index.php?r=labs/addauthor" role="button">Добавить автора</a>
	<a class="btn btn-success btn-lg" href="/basic/web/index.php?r=labs/deleteauthor" role="button">Удалить автора</a>
