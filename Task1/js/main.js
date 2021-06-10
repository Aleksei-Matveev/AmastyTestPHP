$( document ).ready(function() {
    $.ajax({
        url:     "test.php",
        type:     "GET",
        success: function(response) {
            //alert(response);
            showChess(response);
        },
        error: function(response) {
            $('#result_form').html('Ошибка. Данные не отправлены.');
        }
    });

    $("#btn").click(
        function(){
            $.ajax({
                url:     "test.php",
                type:     "POST",
                dataType: "html",
                data: $("#form").serialize(),
                success: function(response) {
                },
                error: function(response) {
                    $('#result_form').html('Ошибка. Данные не отправлены.');
                }
            });
        }
    );
});

function showChess(response){

    let result = $.parseJSON(response);

    result.forEach(
        function (val){
            let fileName = "./img/" + val.figure + ".png";
            if(item = document.getElementById(val.coord))
                item.innerHTML = '<img alt="' + val.figure + '" src=' +  fileName + '>';
        }
    )
}