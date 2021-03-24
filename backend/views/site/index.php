<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
$members=(new \yii\db\Query())->from('member')->count();
$uploads=(new \yii\db\Query())->from('video')->count();
?>
<div class="site-index">
    <div class='container'>
        <div class='row admin-detail'>
            <a href="../member/index">
            <div class='sector total-members card bg-light text-dark d-flex justify-content-center align-items-center'>
                <img src="../../images/user.svg" alt="" style="height:6em;">
                <p><strong><?=$members?></strong> CURRENT MEMBERS</p>
            </div>
            </a> 
            <a href="../video/index">
              <div class='sector total-members card bg-light text-dark d-flex justify-content-center align-items-center'>
                <img src="../../images/photo.svg" alt="">
                <p><strong><?=$uploads?></strong> SERMON UPLOADS</p>
            </div>  
            </a>
            
            <a href="../../frontend/devotion/devotions">
                <div class='sector total-members card bg-light text-dark d-flex justify-content-center align-items-center'>
                <img src="../../images/photo.svg" alt="">
                <p>DEVOTION SUPPORT</p>
            </div>
            </a>
            
            
        </div>
    </div>
</div>
<script src="https://js.pusher.com/beams/1.0/push-notifications-cdn.js"></script>

  

