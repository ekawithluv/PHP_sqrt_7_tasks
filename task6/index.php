<img src='6.png' width='55%' alt='задание'>
<form action='index.php' method='post'>
    <p>Введите название города <input type='text' name='city' id=''></p>
    <p><input type='submit' value='Определить'></p>
</form>
<?php
if(!empty($_POST['city'])) {
    $city=$_POST['city'];    
    if((strlen($city)%2)==0) {
        echo 'Четно';
    }
    else {
        echo 'Не четно';
    };}
else echo 'Вы не ввели название города!';
?>