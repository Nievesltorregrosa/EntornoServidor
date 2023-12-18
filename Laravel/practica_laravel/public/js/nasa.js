$(document).ready(function(){
    $('#btn').click(function(){
        $.ajax({
            url: '/nasa',
            type: 'GET',
            success: function (data){
                $('#infoNasa').html(JSON.stringify(data, null, 2));
            },
            error: function (error){
                console.error("No se pueden mostrar los datos", error);
            }
        });
    });
});