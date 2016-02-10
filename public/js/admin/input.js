$(function() {
    $('input').each(function() {
    	var isDisabled = $(this).prop('disabled');
    	if (isDisabled) {
        	$(this).attr("placeholder", "Disabled");
    	}
	});
});