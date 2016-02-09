var checkInputFilled = function () {
	var $inputs 	= $('.form input'),
    	filledClass = 'filled';
    $textarea = $('form textarea');
    $.merge($inputs, $textarea);

    console.log($inputs);
    
    $inputs.removeClass(filledClass);
    $.each($inputs, function( index, $this ) {
  		if ($this.value!='') {
        	$inputs.eq(index).addClass(filledClass);
    	}
	});
};
function backAway(){
    //if it was the first page
    if(history.length === 1){
        window.location = "http://mlsgroup.com.ua/"
    } else {
        history.back();
    }
}
$(document).ready(function(){
    checkInputFilled();
	$('.form input').on('keyup', function() {
    	checkInputFilled();
    });
    $('.form textarea').on('keyup', function() {
        checkInputFilled();
    });
});