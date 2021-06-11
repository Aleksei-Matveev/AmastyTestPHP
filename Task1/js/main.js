$( document ).ready(function() {

    sendAjaxForm(
        "Moving.php",
        "GET",
        '',
        '');

    $("#btn").click(
        function(){
            sendAjaxForm(
                "Moving.php",
                "POST",
                "html",
                $("#form").serialize());
        });
});

function showChess(response){

    let result = $.parseJSON(response);
    console.log(result);
    result.forEach(
        function (val){
            let fileName = "./img/" + val.figure + ".png";
            if(item = document.getElementById(val.coord))
                item.innerHTML = '<img alt="' + val.figure + '" src=' +  fileName + '>';
        }
    )
}

function sendAjaxForm(url, type, datatype, data){
    $.ajax({
        url:        url,
        type:       type,
        dataType:   datatype,
        data:       data,
        success: function(response) {
            showChess(response);
        },
        error: function(response) {
            $('#result_form').html('Ошибка. Данные не отправлены.' +response);
        }
    });
}