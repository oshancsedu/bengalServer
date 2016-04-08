$('document').ready(function(){

    $('#btaddMS').click(function(){
        var areaCode="N/A";
        var areaName="N/A";
        var distributorName="N/A";
        var rsoName=$("#rsoName").val();
        var MSID=$("#msID").val();
        var password=$('#password').val();
        alert(password+" "+MSID+" "+rsoName);
        if(password=="" || MSID=="" || rsoName=="")
        {
            alert("Fill up all the field!");
        }
        else
        {
            var infoBundle = {
                ms_id: MSID,
                rsoName:rsoName,
                areaName:areaName,
                areaCode:areaCode,
                password:password,
                _token:$('#csrf_token').val(),
                distributorName:distributorName
            };

            $.ajax({
                type:'post',
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