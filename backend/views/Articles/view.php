<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Articles */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => '资讯文章', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="articles-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('更新', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('删除', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '确认删除此文章吗?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'title',
        	[
        		'lable' => 'cover',
        		'attribute' => 'cover',
        		'format' => 'html',
        		'value' => function($model) {
        			return Html::img(Yii::$app->params['frontendDomain'].'/uploads/'.$model->cover);
        		}
        	],
            'content:html',
        	[
        		'lable' => 'category',
        		'attribute' => 'category',
        		'value' => function($model) {
    				return $model->categoryList()[$model->category];
   				 }
    		],
            'views',
            [
            	'lable' => 'created_at',
            	'attribute' => 'created_at',
            	'value' => function($model) {
            		return date('Y-m-d H:i:s', $model->created_at);
    			},
    		],
    		[
    			'lable' => 'updated_at',
    			'attribute' => 'updated_at',
    			'value' => function($model) {
    				return date('Y-m-d H:i:s', $model->updated_at);
    			},
    		],
        ],
    ]) ?>

</div>
