<?php
session_start();

$data = $_POST['data'];
if (strpbrk($data, '23456789')) {
    header('Location: ../index.php');
    die();
}

function binaryToDecimal($data)
{
    $arrayData = (str_split($data, 1));
    $arrayDataSize = sizeof($arrayData);
    $sum = 0;

    for ($i = 0; $i < $arrayDataSize; $i++) {
        $sum += end($arrayData) * pow(2, $i);
        array_pop($arrayData);
    }
    $_SESSION['result'] = $sum;
}

binaryToDecimal($data);
header('Location: ../index.php');
die();
