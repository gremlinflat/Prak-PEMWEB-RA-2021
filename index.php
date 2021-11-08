<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum 5</title>
</head>
<body>
    <nav>
        <ul>
            <li><button href="javascript:void()" onclick="task1()">SOAL NO 1</button></li>
            <li><button href="javascript:void()" onclick="task2()">SOAL NO 2</button></li>
            <li><button href="javascript:void()" onclick="task3()">SOAL NO 3</button></li>
        </ul>
    </nav>
    <div id="content"></div>

</body>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
    function task1(){
        $.get("calc.php", function(data) {
            $("#content").html(data);
        });
    }
    function task2(){
        $.get("sort.php", function(data) {
            $("#content").html(data);
        });
    }
    function task3(){
        $.get("prime.php", function(data) {
            $("#content").html(data);
        });
    }
</script>
</html>