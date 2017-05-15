<?php

use yii\helpers\Html;

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'News', 'url' => ['/news']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="site-index">

    <div class="jumbotron">
        <h2><b>Create new news</b></h2>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">

                <p>

                    <?=$model->id; ?> / <?=$model->user_id; ?> <?=$model->date; ?>
                <p><?=$model->story; ?></p>
                <p><?=$model->full; ?></p>

                </p>

            </div>
        </div>

    </div>
</div>