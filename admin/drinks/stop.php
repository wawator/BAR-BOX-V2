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
exec("gpio write 0 0");
exec("gpio write 1 0");
exec("gpio write 2 0");
exec("gpio write 3 0");
exec("gpio write 4 0");
exec("gpio write 5 0");
exec("gpio write 6 0");
exec("gpio write 7 0");
exec("gpio write 8 0");
header('Location: ' . $_SERVER['HTTP_REFERER']);
?>
