<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\bootstrap4\modal;
use frontend\models\Mailing;
use backend\models\Announcement;
$model= new Mailing;
$events= Announcement::find()->all();
?>
<div class="landing-page">
    <div><p class='landing-verse'>Above all, love each other deeply, because love covers over a multitude of sins.</p></div>
    <div><h6>1 Peter 4:8</h6></div> 
</div>
<div class='events'>
    <div class="container-fluid">
    <div class="row d-flex justify-content-center align-items-center m-3 ">
        <h3 >UPCOMING EVENTS</h3>
    </div>
        <div class="row m-3 scrolling-wrapper row flex-row flex-nowrap mt-4 pb-4 pt-2">
            <?php foreach($events as $event) {?>
                <div class="card mr-4 mb-3" style="width:400px">
               <img src="../../images/photo.svg" alt="">
                    <div class="card-body">
                        <h4 class="card-title"><?=$event->title?></h4>
                        <p class="card-text">Join us as we celebrate the union of John Doe and jane Doe</p>
                    </div>
                 <div class="card-footer">10th March 2021-12th march 2021</div>
            </div>
            <?php }?>   
        </div>
    </div> 
</div>
<div class='features'>
    <div >
        <div class='row d-flex justify-content-center align-items-center m-3 bg-dark'>
        <h3 style='color:white;'>OUR MAIN FEATURES</h3>
        </div>
        <div class='row'>
            <div class="card-columns">
            <a href="../devotion/weekly" id='card-link'>
                <div class="card bg-primary p-5">
                    <div class="card-body text-center">
                    <p class="card-text">DEVOTION SUPPORT</p>
                    <h5>Get in touch with other congregants in a weekly spiritual journey.</h5>
                    </div>
                </div>
            </a>
            <a href="../prayer/requests" id='card-link'>
                <div class="card bg-warning p-5">
                    <div class="card-body text-center">
                    <p class="card-text">PRAYER SUPPORT</p>
                    <h5>Get in touch with other congregants in a weekly spiritual journey.</h5>
                    </div>
                </div>
            </a>
            <a href="sermons" id='card-link'>
                <div class="card bg-success p-5">
                    <div class="card-body text-center">
                    <p class="card-text">SERMON REVIEW</p>
                    <h5>Get in touch with other congregants in a weekly spiritual journey.</h5>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
<div class='contact-mailing container mt-5'>
    <div class='row'>
    <div class='col-md-6'>
        <h2>Reach out to us for enquiries or any questions you might have on the use of this platform.</h2>
        <?= Html::button('JOIN MAILING LIST',['class'=>['btn btn-outline-danger mailing mt-3 mb-5']]);?>
    </div>
    </div>
    </div>
</div>

<?php
Modal::begin([
    'title'=>'JOIN OUR MAILING LIST',
    'id'=>'mailing-list', 
    'size'=>'modal-sm',  
]);
echo "<div id='mailingContent'></div>";
Modal::end();
?>

