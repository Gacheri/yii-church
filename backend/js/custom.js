$(function(){
    'use strict';
    $('#videoFile').change(ev=>{
        $(ev.target).closest('form').trigger('submit');
    })
});

$('.createDistrict').click(function(e){
    e.preventDefault();
	var baseUrl = $(this).attr('baseUrl');
    $.get(baseUrl+'/../district',function(data){
        $('#district').modal('show')
             .find('#districtContent')
             .html(data);
	});
});

const beamsClient = new PusherPushNotifications.Client({
    instanceId: 'e5d84c52-a02f-492d-b1ff-e4562388e838',
  });

  beamsClient.start()
    .then(() => beamsClient.addDeviceInterest('hello'))
    .then(() => console.log('Successfully registered and subscribed!'))
    .catch(console.error);