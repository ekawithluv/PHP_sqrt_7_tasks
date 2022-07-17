<img src='2.png' width='45%' alt='задание'>
<form action='index.php' method='post'>
    <p>Введите значение <i>n</i> <input type='text' name='n_value' id=''></p>
    <p><input type='submit' value='Вычислить'></p>
    <p>Внимание! Правильный ответ:</p>
</form>
<?php
if(!empty($_POST['n_value'])){
    $n=$_POST['n_value'];
    $hours=$n/3600;
    $fullHours=floor($n/3600);
    $minutes=($hours-$fullHours)*60;
    $fullminutes=floor($minutes);
    $seconds=($minutes - $fullminutes)*60;           
    echo 'а) '.round($fullHours,0).' ч. <br>';
    echo 'б) '.round($fullminutes,0).' мин. <br>';
    echo 'в) '.round($seconds,0).' сек. <br>';}
else echo 'Введите значение <i>n</i>!';
?>