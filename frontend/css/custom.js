$('.mailing').click(function(e){
    e.preventDefault();
	var baseUrl = $(this).attr('baseUrl');
    $.get(baseUrl+'/../mailing',function(data){
        $('#mailing-list').modal('show')
             .find('#mailingContent')
             .html(data);
	});
});