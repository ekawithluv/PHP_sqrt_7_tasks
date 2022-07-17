<img src='5.png' width='50%' alt='задание'>
<form action='index.php' method='post'>
    <p><input type='submit' name='btn' value='Вывести'></p>
</form>
<?php
if (isset($_POST['btn'])){
    for($i=100; $i <= 200; $i++){
        if($i%3==0) {
            echo $i.'; ';
        }
    }
}
else echo '';
?>