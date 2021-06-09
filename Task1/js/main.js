$( document ).ready(function() {
    $("#btn").click(
        function(){
            $.ajax({
                url:     "View.php",
                type:     "GET",
                dataType: "html",
                data: $("#form_request").serialize(),
                success: function(response) {
                    let result = $.parseJSON(response);
                    //console.log(result);

                    for (const val in result) {
                        console.log(val);
                        let fileName = "./img/" + val.chess.name + ".png";
                        if(item = document.getElementById(item.chess.coord))
                            item.innerHTML = '<img src=' +  fileName + '>';
                    }




                },
                error: function(response) {
                    console.log("ОШИБКА " + response);
                }
            });
            return false;
        }
    );
});