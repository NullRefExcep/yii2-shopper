<?php

/** @var $categories array */
?>
<div>
    <p class="lead">Categories</p>

    <?= \wbraganca\fancytree\FancytreeWidget::widget([
        'options' => [
            'source' => $categories,
        ]
    ]) ?>
</div>