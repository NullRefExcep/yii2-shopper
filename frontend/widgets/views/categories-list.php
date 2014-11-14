<?php
use kartik\widgets\SideNav;
use yii\helpers\Html;

/** @var $categories array */
?>
<div class="col-md-3">
    <p class="lead">Categories</p>

    <?= SideNav::widget([
        'items' => $categories,
    ]) ?>

</div>