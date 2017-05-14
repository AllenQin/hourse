<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use common\models\Articles;
use yii\web\NotFoundHttpException;

/**
 * Site controller
 */
class ArticlesController extends Controller
{
	/**
	 * @inheritdoc
	 */
	public function actions()
	{
		return [
				'error' => [
						'class' => 'yii\web\ErrorAction',
				]
		];
	}

	/**
	 * Displays lists.
	 *
	 * @return mixed
	 */
	public function actionLists()
	{
		$this->layout = 'common_layout';
		$newsList = Articles::find()
		->orderBy("id desc")
		->limit(3)
		->all();
		 
		return $this->render('lists', ['newsList' => $newsList]);
	}
	
	/**
	 * Displays detail for Article
	 */
	public function actionView()
	{
		$this->layout = 'common_layout';
		$id = Yii::$app->request->getQueryParam('id', 0);
		if (!$id) {
			throw new NotFoundHttpException();
		}
		
		$detail = Articles::find()
			->where(['id' => $id])
			->one();
		return $this->render('view', ['article' => $detail]);
	}
	

}
