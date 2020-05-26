<?php
exec("gpio mode 0 out");
exec("gpio mode 1 out");
exec("gpio mode 2 out");
exec("gpio mode 3 out");
exec("gpio mode 4 out");
exec("gpio mode 5 out");
exec("gpio mode 6 out");
exec("gpio mode 7 out");
exec("gpio mode 8 out");
exec("gpio write 0 1");
exec("gpio write 1 1");
exec("gpio write 2 1");
exec("gpio write 3 1");
exec("gpio write 4 1");
exec("gpio write 5 1");
exec("gpio write 6 1");
exec("gpio write 7 1");
exec("gpio write 8 1");
header('Location: ' . $_SERVER['HTTP_REFERER']);
?>
