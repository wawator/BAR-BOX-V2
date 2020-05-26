<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<?php
exec("gpio mode 3 out"); // GPIO 3 - Relay 4 
exec("gpio write 3 1");
sleep (2);
exec("gpio write 3 0");


header('Location: ' . $_SERVER['HTTP_REFERER']);
?>
