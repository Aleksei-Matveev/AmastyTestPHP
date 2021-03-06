const requestUrl = 'Moving.php';

let lastBoard;

sendRequest('GET', requestUrl).then(response=>initializeChessBoard(response))

function initializeChessBoard(board) {

    lastBoard = board;
    updateBoard(board);

    let btn = document.querySelector('#btn');
    btn.onclick = getMove;

    function getMove(e) {
        e.preventDefault();
       sendRequest('GET', requestUrl, $("#form").serialize()).then(response=>updateBoard(response))
    }
}

function updateBoard(board){

    lastBoard.forEach(function (val){
        if(item = document.getElementById(val.coord))
            item.innerHTML=''
        document.getElementById('result_form').innerHTML = ''
    });

    lastBoard = board;

    board.forEach(
        function (val) {
            if (val.status == 0) {
               let res = document.getElementById('result_form')
                res.innerHTML = '<p>' + val.error + '</p>';
            }

            let fileName = "./img/" + val.figure + ".png";
            if (item = document.getElementById(val.coord))
                item.innerHTML = '<img alt="' + val.figure + '" src=' + fileName + '>';

        });
}

function sendRequest(method, url, params) {
    return fetch(url + '?' + params,{
        method:method
    }).then(response=>{
        return response.json();
    })
}