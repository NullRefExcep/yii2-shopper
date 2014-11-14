<?php

use common\models\Category;
use kartik\widgets\Select2;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Product */
/* @var $form yii\widgets\ActiveForm */
$categories = \yii\helpers\ArrayHelper::map(Category::find()->all(), 'id', 'name', function (Category $object, $defaultValue) {
    if ($object instanceof Category) {
        $parent = $object->getParentCategory()->one();
        return empty($parent) ? $defaultValue : $parent->name;
    }
    return $defaultValue;
});
?>

<div class="product-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'categories')->widget(Select2::className(), [
        'data' => $categories,
        'options' => [
            'placeholder' => 'Select a category ...',
            'multiple' => true,
        ],
        'pluginOptions' => [
            'allowClear' => true,
        ],
    ]); ?>

    <?= $form->field($model, 'price')->textInput() ?>

    <?= $form->field($model, 'short_description')->textarea() ?>

    <?= $form->field($model, 'long_description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'file')->fileInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
