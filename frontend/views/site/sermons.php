<?php
use common\models\Video;
$video=Video::find()->all();
?>
<!DOCTYPE HTML>
<html>
    <head>
    </head>
    <body>
        <div class='sermon-jumbotron'>
            <h2 id='sermon-header'>TAKE TIME AND REKINDLE YOUR SPIRIT</h2>
        </div>
        <div class='sermons mt-5'>
            <?php foreach($video as $videos) {?>
            <div class='row mt-5'>
            <div class='col-md-5'>
                 <iframe width="420" height="315"
                src="<?= $videos->videoPath?>">
                </iframe>
            </div>
                <div class="col-md-7">
                    <h3><?= $videos->title?></h3>
                    <p><?= $videos->description?></p>
                </div>
	        </div><hr>
            <?php }?>
        </div>
    </body>
</html>