<img src='7.png' width='50%' alt='задание'>
<form action='index.php' method='post'>
    <p>Введите любое слово <input type='text' name='word' id=''></p>
    <p><input type='submit' value='Определить'></p>
</form>
<?php
if(!empty($_POST['word'])) {
    $word=$_POST['word'];
    if ($word[1]==$word[3]) {
        echo 'Второй и четвертый символы одинаковы.';
    }
    else {
        echo 'Второй и четвертый символы не одинаковы.';
    };
    }
    else echo 'Вы не ввели слово!';
?>