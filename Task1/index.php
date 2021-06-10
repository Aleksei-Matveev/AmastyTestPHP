<!DOCTYPE html>
<html lang="RU">
<head>
    <title>Task 01</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery.js"></script>
    <script src="js/main.js"></script>
   <body>
<div class="box">
    <div class="centered">
        <table class="chess-board">
            <tbody>
            <tr>
                <th></th>
                <th>a</th>
                <th>b</th>
                <th>c</th>
                <th>d</th>
                <th>e</th>
                <th>f</th>
                <th>g</th>
                <th>h</th>
            </tr>
            <tr>
                <th>8</th>
                <td class="white" id="18"></td>
                <td class="black" id="28"></td>
                <td class="white" id="38"></td>
                <td class="black" id="48"></td>
                <td class="white" id="58"></td>
                <td class="black" id="68"></td>
                <td class="white" id="78"></td>
                <td class="black" id="88"></td>
            </tr>
            <tr>
                <th>7</th>
                <td class="black" id="17"></td>
                <td class="white" id="27"></td>
                <td class="black" id="37"></td>
                <td class="white" id="47"></td>
                <td class="black" id="57"></td>
                <td class="white" id="67"></td>
                <td class="black" id="77"></td>
                <td class="white" id="87"></td>
            </tr>
            <tr>
                <th>6</th>
                <td class="white" id="16"></td>
                <td class="black" id="26"></td>
                <td class="white" id="36"></td>
                <td class="black" id="46"></td>
                <td class="white" id="56"></td>
                <td class="black" id="66"></td>
                <td class="white" id="76"></td>
                <td class="black" id="86"></td>
            </tr>
            <tr>
                <th>5</th>
                <td class="black" id="15"></td>
                <td class="white" id="25"></td>
                <td class="black" id="35"></td>
                <td class="white" id="45"></td>
                <td class="black" id="55"></td>
                <td class="white" id="65"></td>
                <td class="black" id="75"></td>
                <td class="white" id="85"></td>
            </tr>
            <tr>
                <th>4</th>
                <td class="white" id="14"></td>
                <td class="black" id="24"></td>
                <td class="white" id="34"></td>
                <td class="black" id="44"></td>
                <td class="white" id="54"></td>
                <td class="black" id="64"></td>
                <td class="white" id="74"></td>
                <td class="black" id="84"></td>
            </tr>
            <tr>
                <th>3</th>
                <td class="black" id="13"></td>
                <td class="white" id="23"></td>
                <td class="black" id="33"></td>
                <td class="white" id="43"></td>
                <td class="black" id="53"></td>
                <td class="white" id="63"></td>
                <td class="black" id="73"></td>
                <td class="white" id="83"></td>
            </tr>
            <tr>
                <th>2</th>
                <td class="white" id="12"></td>
                <td class="black" id="22"></td>
                <td class="white" id="32"></td>
                <td class="black" id="42"></td>
                <td class="white" id="52"></td>
                <td class="black" id="62"></td>
                <td class="white" id="72"></td>
                <td class="black" id="82"></td>
            </tr>
            <tr>
                <th>1</th>
                <td class="black" id="11"></td>
                <td class="white" id="21"></td>
                <td class="black" id="31"></td>
                <td class="white" id="41"></td>
                <td class="black" id="51"></td>
                <td class="white" id="61"></td>
                <td class="black" id="71"></td>
                <td class="white" id="81"></td>
            </tr>
            </tbody>
        </table>
    </div>
    <div>
        <form method="post" id="form">
            <p>
                <input type="radio" name="data[figure]" id="king" value="king" >
                <label for="king">King</label>
                <input type="radio" name="data[figure]" id="queen" value="queen" checked>
                <label for="queen">Queen</label>
            </p>
            <p>
                <label for="coordinateFigure">Введите новые координаты фугуры </label>
                <input class="input_coordinate" type="text" id="coordinateFigure" name="data[coordinate]">
            </p>
            <input type="submit" id="btn" maxlength="5">
        </form>
        <div id="result_form"></div>
    </div>
</div>
</body>
</html>



