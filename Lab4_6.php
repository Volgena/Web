<form action="kard2.php" method="post">
<input type="text" size="2" name="i">
<input type="submit" value="Выполнить">
</form>
<?php
$i = $_POST ['i'];
 
switch ($i) {
    case 6:
        echo 'Ваша карта: шестерка';
        break;
    case 7:
        echo 'Ваша карта: семерка';
        break;
    case 8:
        echo 'Ваша карта: восьмерка';
        break;
    case 9:
        echo 'Ваша карта: девятка';
        break;
    case 10:
        echo 'Ваша карта: десятка';
        break;
    case 11:
        echo 'Ваша карта: валет';
        break;
    case 12:
        echo 'Ваша карта: дама';
        break;
    case 13:
        echo 'Ваша карта: король';
        break;
    case 14:
        echo 'Ваша карта: туз';
        break;
   
    default:
        echo 'Карта не определена или неверный ввод';
        break;
        }
