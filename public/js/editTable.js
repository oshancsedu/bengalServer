$('document').ready(function(){

    $('.editable').css('cursor','pointer').find('input').hide();
    var prevTag=null,prevText,currentText;
    $('.editable').dblclick(function(){

        if(prevTag!=null)
        {
            checker();
        }

        var pTag=$(this).find('p');
        var text=pTag.text();
        pTag.slideUp();
        $(this).find('input').val(text).slideDown().focus();
        prevTag=$(this);
        prevText=text;

        $(this).focusout(function(){
            checker();
            prevTag=null;
        });

    });

    function checker()
    {
        currentText=prevTag.find('input').val();
        if(prevText!=currentText)
        {
            prevTag.find('p').html(currentText);

            var infoBundle = {
                id: prevTag.attr('id'),
                column: prevTag.find('input').attr('column'),
                value:currentText,
                _token:$('#csrf_token').val(),
                table:$('#table_name').val(),
                id_col:$('#id_col').val()
            };

            $.ajax({
                type:'put',
                data: infoBundle,
                url: 'Update'


            });

        }

        prevTag.find('input').slideUp();
        prevTag.find('p').slideDown();
    }
});