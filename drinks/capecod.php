<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<?php
exec("gpio mode 0 out"); // GPIO 0 - pump 1 : Vodka
exec("gpio mode 4 out"); // GPIO 4 - pump 5 : Jus de Cranberry
exec("gpio write 0 1");
exec("gpio write 4 1");
sleep (18);
exec("gpio write 0 0");
sleep (37);
exec("gpio write 4 0");


header('Location: ' . $_SERVER['HTTP_REFERER']);
?>
