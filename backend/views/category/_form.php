<?php

use common\models\Category;
use kartik\widgets\Select2;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Category */
/* @var $form yii\widgets\ActiveForm */

$query = Category::find();
if (!$model->isNewRecord)
    $query->where(['!=', 'id', $model->id]);
$categories = \yii\helpers\ArrayHelper::map($query->all(), 'id', 'name')
?>

<div class="category-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'parent_id')->widget(Select2::className(), [
        'data' => $categories,
        'options' => ['placeholder' => 'Select a parent category ...'],
        'pluginOptions' => [
            'allowClear' => true,
        ],
    ]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
