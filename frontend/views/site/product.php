<?php
use frontend\widgets\CategoriesList;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Product */
$this->title = $model->name;
?>
<div class="site-index">

    <div class="body-content">

        <div class="row">

            <div class="col-md-3">
                <?= CategoriesList::widget([]) ?>
            </div>

            <div class="col-md-9">

                <div class="thumbnail">
                    <?= Html::img($model->getImage(), ['class' => 'img-responsive', 'alt' => $model->name]) ?>
                    <div class="caption-full">
                        <h4 class="pull-right">$<?= $model->price ?></h4>
                        <h4><a><?= $model->name ?></a>
                        </h4>

                        <p><?= $model->long_description ?></p>

                    </div>
                    <div class="ratings">
                        <p class="pull-right">3 reviews</p>

                        <p>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star-empty"></span>
                            4.0 stars
                        </p>
                    </div>
                </div>

                <div class="well">

                    <div class="text-right">
                        <a class="btn btn-success">Leave a Review</a>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-md-12">
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star-empty"></span>
                            Anonymous
                            <span class="pull-right">10 days ago</span>

                            <p>This product was great in terms of quality. I would definitely buy another!</p>
                        </div>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-md-12">
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star-empty"></span>
                            Anonymous
                            <span class="pull-right">12 days ago</span>

                            <p>I've alredy ordered another one!</p>
                        </div>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-md-12">
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star-empty"></span>
                            Anonymous
                            <span class="pull-right">15 days ago</span>

                            <p>I've seen some better than this, but not at this price. I definitely recommend this
                                item.</p>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>
