<?php
$correct_pin = '7272';
$entered_pin = $_POST['pin'];

if ($entered_pin === $correct_pin) {
    header('Location: https://https://sites.google.com/view/p-ecosystem/inicio-b');
    exit();
} else {
    echo 'PIN incorrecto. Inténtalo de nuevo.';
}
?>
