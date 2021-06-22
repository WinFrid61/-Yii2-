<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\data\Pagination;
use yii\filters\VerbFilter;
use yii\db\Query;
use yii\db\ActiveQuery;
use app\models\FeedbackForm;
use app\models\Authors;
use app\models\Genres;
use app\models\Books;
use app\models\FindBookForm;
use app\models\AddauthorForm;
use app\models\DeleteauthorForm;


class LabsController extends Controller
{
	 function actionInfo()
    {
        return $this->render('info');
    }
    public function actionLab1()
    {
        $model = new FeedbackForm();

        if ($model->load(Yii::$app->request->post()) )
        {
            Yii::$app->session->setFlash('FeedbackSubmitted');

        } 
           return $this->render('lab1', ['model' => $model]);
    }
    public function actionLab2()
    {
        return $this->render('lab2');
    }
    public function actionLab3()
    {
        return $this->render('lab3');
    }
	    public function actionLab5()
    {
        return $this->render('lab5');
    }
	
	public function actionAuthors()
    {
        $query = Authors::find();
        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count(),
        ]);
        $authors = $query->orderBy('id')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
        return $this->render('authors', [
            'authors' => $authors,
            'pagination' => $pagination,
        ]);
    }
	
	public function actionGenres()
    {
        $query = Genres::find();
        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count(),
        ]);
        $genres = $query->orderBy('id')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
        return $this->render('genres', [
            'genres' => $genres,
            'pagination' => $pagination,
        ]);
    }
	
	public function actionBooks()
    {
        $query = Books::find();
        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count(),
        ]);
        $books = $query->orderBy('id')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
        return $this->render('books', [
            'books' => $books,
            'pagination' => $pagination,
        ]);
    }
	
	public function actionSortirovka()
    {
        $books = Books::find()->innerjoinWith('genres')
			->innerjoinWith('authors')
			->where(['between', 'rel', "1900-01-01", "2000-01-01" ])
			->orderBy('rel ASC')
			->all();
        return $this->render('sortirovka', [ 
			'sort' => $books
		]);
    }
	
	   public function actionBookscount()
    {
        $countb = Authors::find()->InnerjoinWith('books')->all();
        return $this->render('bookscount', [ 'countb' => $countb ]);
    }
		
	public function actionFindbook()
    {
        $model = new FindbookForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
        $books = Books::find()->innerjoinWith('genres')->innerjoinWith('authors')->Where(['like', 'Books.name', $model->name])->orderBy('rel')->all();
        return $this->render('findbook', ['books' => $books, 'model' =>$model]);
        } else {
        $books = Books::find()->innerjoinWith('genres')->innerjoinWith('authors')->orderBy('rel')->all();
            return $this->render('findbook', ['books' => $books,'model' =>$model]);
        }
    }  
	
	public function actionAddauthor()
    {
        $model = new AddauthorForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
        $add = new Authors;
        $add->name = $model->name;
        $add->birth = $model->birth;
		$add->dead = $model->dead;
        $add->save(); 
        return $this->render('addauthor', ['model' =>$model]);
        } else {
        
            return $this->render('addauthor', ['model' =>$model]);
        }
    }
    
    public function actionDeleteauthor()
    {
        $model = new DeleteauthorForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
        $delete = Authors::findOne($model->id);
        $delete->delete();
        return $this->render('deleteauthor', ['model' =>$model]);
        } else {
        
            return $this->render('deleteauthor', ['model' =>$model]);
        }
    }
}