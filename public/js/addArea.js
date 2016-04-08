$('document').ready(function(){

    $('#btadd').click(function(){
        var areaCode=$('#area_code').val();
        var areaName=$('#area_name').val();
        var distributorName=$('#distributor_name').val();
        var rsoName=$("#rso_name").val();
        var MSID=$("#ms_id").val();
        if(areaName=="" || areaCode=="" || rsoName=="" || MSID=="" || distributorName=="")
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
                _token:$('#csrf_token').val(),
                distributorName:distributorName
            };

            $.ajax({
                type:'post',
                data: infoBundle,
                url: 'InsertArea',
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