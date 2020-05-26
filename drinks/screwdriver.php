<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<?php
exec("gpio mode 0 out"); // GPIO 0 - Pump 1 : Vodka 
exec("gpio mode 2 out"); // GPIO 2 - Pump 3 : Jus d'orange
exec("gpio write 0 1");
exec("gpio write 2 1");
sleep (23);
exec("gpio write 0 0");
sleep (40);
exec("gpio write 2 0");


header('Location: ' . $_SERVER['HTTP_REFERER']);
?>
