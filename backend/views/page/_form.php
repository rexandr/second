<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\helpers\StatusHelper;
use common\helpers\CategoryHelper;

/* @var $this yii\web\View */
/* @var $model backend\models\page\Page */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="page-form">

    <?php echo Yii::$app->config->get(kdsnvsdlkfn) ?>
    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'category_id')->dropDownList(CategoryHelper::getCategoryList()) ?>

    <?= $form->field($model, 'meta_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'meta_description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'header')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'image')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->dropDownList(StatusHelper::getStatusLabels()) ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
