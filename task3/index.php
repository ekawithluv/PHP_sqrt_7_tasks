<img src='3.png' width='45%' alt='задание'>
<form action='index.php' method='post'>
    <p>Введите значение <i>x</i> <input type='text' name='x_value' id=''></p>
    <p><input type='submit' value='Вычислить'></p>
    <p>Внимание! Правильный ответ:</p>
</form>
<?php
if(!empty($_POST['x_value'])){ 
    $x=$_POST['x_value'];
    if ($x>0) {$y=pow(sin($x),2);} 
    else {$y=1-2*(pow(sin($x),2));}
    echo 'y = '.round($y,2).';';}
else echo 'Введите значение <i>x</i>!'
?>