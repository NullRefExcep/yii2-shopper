<?php
use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this yii\web\View */
$this->title = 'Shop Homepage';
?>
<div class="site-index">

    <div class="body-content">

        <div class="row">

            <div class="col-md-3">
                <p class="lead">Shop Name</p>

                <div class="list-group">
                    <?php foreach (\common\models\Category::find()->all() as $category): ?>
                        <?= Html::a($category->name, Url::toRoute(['site/category', 'id' => $category->id]), ['class' => 'list-group-item']) ?>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="col-md-9">

                <div class="row carousel-holder">

                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="slide-image" src="//lorempixel.com/800/300/nightlife/1" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="//lorempixel.com/800/300/nightlife/2" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="//lorempixel.com/800/300/nightlife/3" alt="">
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>

                </div>

                <div class="row">

                    <?php foreach (\common\models\Product::find()->all() as $product) : ?>
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
