<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<?php
exec("gpio mode 4 out"); // GPIO 4 - Relay 5 
exec("gpio write 4 1");
sleep (2);
exec("gpio write 4 0");


header('Location: ' . $_SERVER['HTTP_REFERER']);
?>
