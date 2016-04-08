$('document').ready(function(){

    $('#btupdateMSPassword').click(function(){

        var MSID=$("#ms_ID").val();
        var password=$('#msPassword').val();
        if(password=="" || MSID=="" )
        {
            alert("Fill up all the field!");
        }
        else
        {
            var infoBundle = {
                ms_id: MSID,
                password:password,
                _token:$('#csrf_token').val()
            };

            $.ajax({
                type:'put',
                data: infoBundle,
                url: 'InsertMS',
                success: function(data){
                    alert("Successfully Added");
                },
                error:function(data){
                    alert("Couldn't added");
                }

            });
        }
    });
});