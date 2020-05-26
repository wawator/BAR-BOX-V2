<?php
exec("gpio mode 5 out"); // GPIO 5 - Relay 6
exec("gpio write 5 1");
sleep (2);
exec("gpio write 5 0");


header('Location: ' . $_SERVER['HTTP_REFERER']);
?>
