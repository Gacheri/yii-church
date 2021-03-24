<?php
use backend\models\Announcement;
$announcement=Announcement::find()->all();
?>
<div class='container'>
    <?php foreach($announcement as $announce){?>
        <div class='card mt-4'>
        <p><?=$announce->announcementId?>. <?=$announce->title?></p>
        <h5><?=$announce->message?></h5>
        <a href="view?id=<?=$announce->announcementId?>" class='btn btn-danger'>UPDATE</a>
        </div>
        
    <?php }?>

</div>