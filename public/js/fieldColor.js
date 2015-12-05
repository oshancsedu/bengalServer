$('document').ready(function(){

    $('input:text,#password,input:checkbox,input[type="email"],textarea,#userType').css("background-color","white");

    $('h7').css("color","white");

    $('input:text,#password,input:checkbox,input[type="email"],textarea,#userType').focusout(function(){
        $(this).css('background-color','white');
    }).focusin(function(){
        $(this).css('background-color','#A9D0F5');
    });
});