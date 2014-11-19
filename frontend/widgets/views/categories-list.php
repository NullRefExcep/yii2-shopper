<?php
use wbraganca\fancytree\FancytreeWidget;

/** @var $categories array */
?>
<div>

    <p class="lead">Categories</p>

    <?= FancytreeWidget::widget([
        'name' => 'category',
        'source' => $categories,
        'clickFolderMode' => FancytreeWidget::CLICK_ACTIVATE_EXPAND,
    ]) ?>

</div>