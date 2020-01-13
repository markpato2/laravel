$(function( $ ){

    // Department Change
    $('#sel_pais').change(function(){

        // Department id
        var id = $(this).val();


        // Empty the dropdown
        $('#sel_ciudad').find('option').not(':first').remove();


        $.ajax({
            url: 'getCiudad/'+id,
            type: 'get',
            dataType: 'json',
            success: function(response){

                var len = 0;
                if(response['data'] != null){
                    len = response['data'].length;
                }

                if(len > 0){
                    // Read data and create <option >
                    for(var i=0; i<len; i++){

                        var id = response['data'][i].id;
                        var name = response['data'][i].descricaoCiudad;

                        var option = "<option value='"+id+"'>"+name+"</option>";

                        $("#sel_ciudad").append(option);
                    }
                }

            }
        });
    });

});
