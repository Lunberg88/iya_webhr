<?php
/* @var $this yii\web\View */
?>
<h1>News</h1>

<p>
<?php foreach($allnews as $news): { ?>
    <?=$news->id; ?> / <?=$news->user_id; ?> <?=$news->date; ?>
<p><?=$news->story; ?></p>
<?php } endforeach; ?>
</p>
