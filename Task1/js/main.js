
$( document ).ready(function() {
    $("#btn").click(
        function(){
            sendAjaxForm('form_request', 'View.php');
            return false;
        }
    );
});

function sendAjaxForm(form_request, url) {
    $.ajax({
        url:     url, //url страницы (action_ajax_form.php)
        type:     "POST", //метод отправки
        dataType: "html", //формат данных
        data: $("#" + form_request).serialize(),  // Сеарилизуем объект
        success: function(response) { //Данные отправлены успешно
            result = $.parseJSON(response);
            let item = document.getElementById(result.coord);
            console.log(item);
            item.innerHTML = '<img src="queen.png">';
        },
        error: function(response) { // Данные не отправлены
           console.log("ОШИБКА");
        }
    });
}
















