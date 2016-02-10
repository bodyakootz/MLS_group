$(function() {
    $("#login").click(function() {
        $('.menu').css('left','-320px');
        $('.popup_backgr').css('display','block');
        $('.header').css('z-index','-4');
    });
    $("#input_login").focus(function() {
        $('.img_login2').css('display','block');
    })
    $("#input_login").focusout(function() {
        $('.img_login2').css('display','none');
    })
   $('#input_login').focus(function(){
        $('#input_login[placeholder]').css('color','#000');
        $('#input_password[placeholder]').css('color','#c2c5ca');
    });
    $('#input_login').focusout(function(){
        $('#input_login[placeholder]').css('color','#c2c5ca');
        $('#input_password[placeholder]').css('color','#000');
    });
});