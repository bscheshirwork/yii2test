<?php
/* @var $this yii\web\View */
$this->title = 'Yii2 demo';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Welcome!</h1>

        <p class="lead">Push button to continue...</p>

        <p><a class="btn btn-lg btn-success" href="<?= \Yii::$app->urlManager->createUrl(['order/view', 'id' => 1]); ?>">goOrder&raquo;</a></p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-12">
                <h2>Yii2 incoming!</h2>
        
                <p>Yep! 2 week ago...</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>
	    </div>

            <div class="col-lg-12">
                <h2>About</h2>

                <p>How is it?</p>

                <p><a class="btn btn-default" href="<?= \Yii::$app->urlManager->createUrl(['site/about']); ?>">Read more &raquo;</a></p>
            </div>
        </div>

    </div>
</div>
