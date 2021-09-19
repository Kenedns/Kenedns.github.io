<h1 align="center">Дякуємо за реєстрацію!</h1>
<?php
$st = $_POST['name2'].";".$_POST['name1'].";".$_POST['nicl'].";".$_POST['email'].";".$_POST['password']."\n";

$fp = fopen("baza.txt","a");
$test = fwrite($fp,$st);
echo "<h2 align='center' >Ви ввели:".$_POST['name2'].",".$_POST['name1'].",".$_POST['nicl'].",".$_POST['email'].",".$_POST['password']."</h2>";
?>
</h1>