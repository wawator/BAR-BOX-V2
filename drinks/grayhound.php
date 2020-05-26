<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<?php
exec("gpio mode 0 out"); // GPIO 0 - Pump 1 : Vodka 
exec("gpio mode 5 out"); // GPIO 5 - Pump 6 : Jus de Pamplemousse
exec("gpio write 0 1");
exec("gpio write 5 1");
sleep (23);
exec("gpio write 0 0");
sleep (69);
exec("gpio write 5 0");

header('Location: ' . $_SERVER['HTTP_REFERER']);
?>

