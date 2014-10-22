<?php
/* @var $this yii\web\View */
$this->title = 'Order '.$model->id;
?>
<div class="site-index">

    <div class="body-content">

        <div class="row">
            <div class="col-lg-8">
                <h2>Order #<?= $model->id; ?></h2>
		<?php 
		echo yii\grid\GridView::widget([
		    'dataProvider' => $dataProvider,
		]);

		?>

            </div>
            <div class="col-lg-4">

                <p><?php 
		    echo yii\widgets\DetailView::widget([
			'model' => $model,
			'attributes' => [
			    'id',             // title attribute (in plain text)
			    'note:html',  // description attribute in HTML
			    [                    // the owner name of the model
				'label' => 'Owner',
				'value' => $model->customer->user->username,
			    ],
			],
		    ]);		
		?></p>

                <p><a class="btn btn-default" href="<?= \Yii::$app->urlManager->createUrl(['site/user', 'id' => $model->customer->user->id]); ?>">Owner &raquo;</a></p>
            </div>

        </div>

    </div>
</div>
