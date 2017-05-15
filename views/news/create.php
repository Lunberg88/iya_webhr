<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use dosamigos\ckeditor\CKEditor;

$this->title = 'Create new News';
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

                <?php $form = ActiveForm::begin(['id' => 'create-news']); ?>

                <?= $form->field($model, 'title')->textInput(['max' => 255]) ?>

                <?= $form->field($model, 'story')->widget(CKEditor::className(), [
                    'options' => ['rows' => 8],
                    'preset' => 'basic'
                ]) ?>

                <?= $form->field($model, 'full')->widget(CKEditor::className(), [
                    'options' => ['rows' => 8],
                    'preset' => 'basic'
                ]) ?>

                <?= $form->field($model, 'user_id')->hiddenInput(['value' => Yii::$app->user->id]) ?>

                <?= Html::submitButton('Create', ['class' => 'btn btn-primary', 'name' => 'create-news']) ?>

                <?php ActiveForm::end(); ?>
            </div>
        </div>

    </div>
</div>
