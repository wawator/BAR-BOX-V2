<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<?php
exec("gpio mode 0 out"); // GPIO 0 - pump 1 : Vodka 
exec("gpio mode 1 out"); // GPIO 1 - Pump 2 : Schnaps à la pêche
exec("gpio mode 4 out"); // GPIO 4 - Pump 5 : Jus de Cranberry
exec("gpio write 0 1");
exec("gpio write 1 1");
exec("gpio write 4 1");
sleep (13);
exec("gpio write 1 0");
sleep (12);
exec("gpio write 0 0");
sleep (26);
exec("gpio write 4 0");

header('Location: ' . $_SERVER['HTTP_REFERER']);
?>
