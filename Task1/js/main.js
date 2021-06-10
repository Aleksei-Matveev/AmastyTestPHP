$( document ).ready(function() {
    $.ajax({
        url:     "test.php",
        type:     "GET",
        success: function(response) {
            showChess(response);
        },
        error: function(response) {
            console.log("ОШИБКА " + response);
        }
    });

    $("#btn").click(
        function(){
            $.ajax({
                url:     "test.php",
                type:     "POST",
                dataType: "html",
                data: $("#form_request"),
                success: function(response) {
                     showChess(response);
                },
                error: function(response) {
                    console.log("ОШИБКА " + response);
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