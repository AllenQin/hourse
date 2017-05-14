<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Articles */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="articles-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'content')->widget(\yii\redactor\widgets\Redactor::className(), [
    	'clientOptions' => [
    		'height' => '300px'
    	],
    ]) ?>

    <?= $form->field($model, 'category')->dropDownList($model->categoryList()) ?>
	<?php 
		if ($model->isNewRecord == false) {
			echo Html::img(Yii::$app->params['frontendDomain'].'/uploads/'.$model->cover);
			echo Html::hiddenInput('cover-img', $model->cover);
		} 
	?>
	<?= $form->field($model, 'article_url')->textInput(['maxlength' => true]) ?>
	<?= $form->field($model, 'cover')->fileInput() ?>
    <div class="form-group">
        <?= Html::submitButton('保存', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
