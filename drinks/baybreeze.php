
<?php
exec("gpio mode 0 out"); // GPIO 0 - Pump 2 : Vodka
exec("gpio mode 4 out"); // GPIO 4 - Pump 5 : Jus de Cranberry
exec("gpio mode 3 out"); // GPIO 3 - Pump 4 : Jus d'Ananas
exec("gpio write 0 1");
exec("gpio write 4 1");
exec("gpio write 3 1");
sleep (11);
exec("gpio write 0 0");
sleep (4);
exec("gpio write 4 0");
sleep (19);
exec("gpio write 3 0");

header('Location: ' . $_SERVER['HTTP_REFERER']);
?>
