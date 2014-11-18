<?php
use frontend\widgets\CategoriesList;
use yii\helpers\Html;

/**
 * @var $this yii\web\View
 * @var $dataProvider \yii\data\ActiveDataProvider
 */
$this->title = 'Shop Homepage';
?>
<div class="site-index">

    <div class="body-content">

        <div class="row">

            <div class="col-md-3">
                <?= CategoriesList::widget() ?>
            </div>

            <div class="col-md-9">

                <?php $items = [];
                foreach (\common\models\Product::find()->limit(3)->all() as $product) {
                    /** @var \common\models\Product $product */
                    $items[] = [
                        'content' => Html::a(Html::img($product->getImage(), ['alt' => $product->name]),
                            ['site/product', 'id' => $product->id]),
                        'caption' => $product->name . ' $' . $product->price,
                    ];
                } ?>
                <div class="row carousel-holder">
                    <div class="col-md-12">
                        <?= \yii\bootstrap\Carousel::widget([
                            'items' => $items,
                            'options' => ['class' => 'slide'],
                            'controls' => [
                                Html::tag('span', '', ['class' => 'glyphicon glyphicon-chevron-left']),
                                Html::tag('span', '', ['class' => 'glyphicon glyphicon-chevron-right']),
                            ],
                        ]) ?>
                    </div>
                </div>

                <div class="row">

                    <?php foreach ($dataProvider->getModels() as $product) : ?>
                        <div class="col-sm-4 col-lg-4 col-md-4">
                            <div class="thumbnail">
                                <?= Html::img($product->getImage(), ['alt' => $product->name]) ?>

                                <div class="caption">
                                    <h4 class="pull-right">$<?= $product->price ?></h4>
                                    <h4><?= Html::a($product->name, ['site/product', 'id' => $product->id]) ?></h4>

                                    <p><?= $product->short_description ?></p>
                                </div>
                                <div class="ratings">
                                    <p class="pull-right">15 reviews</p>

                                    <p>
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star-empty"></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>

                </div>

            </div>

        </div>

    </div>

</div>
