<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<?php
exec("gpio mode 0 out"); // GPIO 0 - Pump 1 : Vodka
exec("gpio mode 1 out"); // GPIO 1 - Pump 2 : Schnaps à la pêche
exec("gpio mode 2 out"); // GPIO 2 - Pump 3 : Jus d'orange
exec("gpio write 0 1");
exec("gpio write 1 1");
exec("gpio write 2 1");
sleep (13);
exec("gpio write 0 0");
sleep (10);
exec("gpio write 1 0");
sleep (9);
exec("gpio write 2 0");


header('Location: ' . $_SERVER['HTTP_REFERER']);
?>
