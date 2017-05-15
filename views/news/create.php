<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Create new News';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-index">

    <div class="jumbotron">
        <h2><b>Create new news</b></h2>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <?php $form = ActiveForm::begin(['id' => 'create-news']); ?>

                <?= $form->field($model, 'title')->textInput(['max' => 255]) ?>

                <?= $form->field($model, 'story')->textarea(['rows' => 7]) ?>

                <?= $form->field($model, 'full')->textarea(['rows' => 7]) ?>

                <?= Html::submitButton('Create', ['class' => 'btn btn-primary', 'name' => 'create-news']) ?>

                <?php ActiveForm::end(); ?>
            </div>
        </div>

    </div>
</div>
