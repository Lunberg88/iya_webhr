<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
?>

<h1>News</h1>
<div align="right">
    <p>
        <?= Html::a('Create', ['create'], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', '/'], ['class' => 'btn btn-danger']) ?>
    </p>
</div>
<p>
    <?php foreach($allnews as $news): { ?>
   id: <?=$news->id; ?> / author: <?=$news->user->username; ?> / date: <?=$news->date; ?>
<p><?=$news->story; ?></p>
<?php } endforeach; ?>
</p>
