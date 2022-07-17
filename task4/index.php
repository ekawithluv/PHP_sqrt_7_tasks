<img src='4.png' width='55%' alt='задание'>
<form action='index.php' method='post'>
    <p><input type='submit' name = 'btn' value='Напечатать'></p>
</form>
<?php
if (isset($_POST['btn'])){
    echo '<table border=\'1\'>
    <thead>
        <tr>
            <th>Товар (шт.)</th>
            <th>Стоимость (&#8381)</th>
        </tr>
    </thead>
    <tbody style=\'text-align: center;\'>';        
            function getTablePrice(){
                $p=20.4;
                for ($i=1; $i <= 20; $i++) { 
                    echo '<tr><td>'.$i.'</td>'.'<td>'.$p*$i.'</td></tr>';
                }                             
            }
            getTablePrice();        
    '</tbody>
</table>';}
else echo '';
?>