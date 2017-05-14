<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = "Profile";
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <h2><?=$model->username; ?> :: Profiles</h2>
            <p>id: <?=$model->id; ?></p>
            <p>name: <?=$model->username; ?></p>
        </div>
        <div class="col-md-4">
            <h2>Change your info</h2>
            <p>
                <?php $form = ActiveForm::Begin([
                        'id' => 'profile-changes',

    ]); ?>
                <?= $form->field($model, 'username')->textInput() ?>

                <?= $form->field($model, 'email')->textInput() ?>

                <?= Html::submitButton('Save changes', ['class' => 'btn btn-primary', 'name' => 'save-changes']) ?>
            </p>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
