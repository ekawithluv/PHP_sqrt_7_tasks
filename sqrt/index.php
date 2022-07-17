<p>Квадратное уравнение ax² + bx + c = 0 </p>
<form action='index.php' method='post'>
    <p>Введите значение a <input type='text' name='a_value' id=''></p>
    <p>Введите значение b <input type='text' name='b_value' id=''></p>
    <p>Введите значение c <input type='text' name='c_value' id=''></p>
    <p><input type='submit' value='Вычислить'></p>
    <p>Внимание! Правильный ответ:</p>
</form>

<?php
if (isset($_POST['a_value']) &&
$_POST['b_value'] &&
$_POST['c_value'] !='') {
    $a=$_POST['a_value'];
    $b=$_POST['b_value'];
    $c=$_POST['c_value'];
    $d=$b*$b-4*$a*$c;
    if ($d>0)
    echo 'x<sub>1</sub> = '.round(((-$b+sqrt($d))/(2*$a)),2).';'.'<br>'.'x<sub>2</sub> = '.round(((-$b-sqrt($d)/(2*$a))),2).';';
    else if ($d==0)
    echo 'x = '.round((-$b/2*$a),2).'<br>';
    else
    echo 'Уравнение не имеет корней;';}
else 
echo 'Вы ещё не ввели все необходивые значения!';
?>
