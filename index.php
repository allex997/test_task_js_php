<?php
require "php/rand_array_3.1.php";
echo '</br> </br>';
require "php/create_class_worker_3.2.php";
echo '</br> </br>';
require "php/even_numbers_3.3.php";
echo '</br> </br>';
require "php/work_with_file_3.4.php";
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="/JS/check_color_1.1.js"> </script>
    <script src="/JS/text_inputs_1.2.js"> </script>
    <script src="/JS/tree_ul_li_1.3.js"> </script>
    <script src="/other_library/jquery-3.6.0.min.js"> </script>

    <script src="/JS/create_h3_2.1.js"> </script>
    <script src="/JS/edit_list_text_2.2.js"> </script>
    <script src="/JS/php_handler_2.3.js"> </script>
    
    <title>Тестовое задание</title>
</head>
<body onload = recursion();edit_list_text();>
    <p style="text-align: center">
    <button style="color: white; background: red;" onclick=set_color(this)>Красная кнопка</button>
    </br> </br>

    <input type="text" oninput="this.value = this.value.replace(/[^\d\.\,\']/g,'')" onchange="this.value=this.value.replace(/[\']/g,'');fSumm(this)">
    <input type="text">
    </br> </br>

    <div><ul><li></li></ul></div>
    
    <p></p><p></p>

    <form id='form1' action="/php/form1.php" method="post">
    <input type="submit" value="Кнопка">
    </form>

    <form id='form2' method="post">
    <input type="submit" name="write_file" value="Запись в 1.txt файл">
    <input type="submit" name="rename_file" value="Перейменовать 2.txt">
    <input type="submit" name="delete_file"  value="Удалить 3.txt">
    <input type="submit" name="move_file" value="Переместить 4.txt в папку">
    <input type="submit" name="exis_file" value="Вывести существует ли 5.txt">
    </form>

</body>
</html>