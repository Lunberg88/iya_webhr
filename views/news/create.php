<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Create new News';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Create new news</h1>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                <?php ActiveForm::end(); ?>
            </div>
        </div>

    </div>
</div>
