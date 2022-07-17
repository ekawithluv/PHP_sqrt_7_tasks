
<img src='1.png' width='40%' alt='задание'>
<form action='index.php' method='post'>
    <p>Введите значение х <input type='text' name='x_value' id=''></p>
    <p>Введите значение y <input type='text' name='y_value' id=''></p>
    <p><input type='submit' value='Вычислить'></p>
    <p>Внимание! Правильный ответ:</p>
</form>
<?php
if (isset($_POST['x_value']) && $_POST['y_value'] !='') {
    $x=$_POST['x_value'];
    $y=$_POST['y_value'];
    $z=($x+(2+$y)/pow($x,2))/($y+(1/(sqrt($x+10))));
    echo 'z = '.round($z,2).';<br>';
    $q=2.8*sin($x)+abs($y);
    echo 'q = '.round($q,2).';';}
else
echo 'Вы ещё не ввели все необходивые значения!';
?>