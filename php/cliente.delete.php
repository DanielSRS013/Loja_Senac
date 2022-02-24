<?php

require_once('./cliente.crud.php');

if ($_GET['codigo'] == NULL) {
    header('location: error.php?status=access-deny'); 
    die(); 
}

$result = fnDeleteCliente($_GET['codigo']);

if ($result) {
    header("location: cliente.list.php?status=success");
    die();
}

header("location: cliente.list.php?status=fail");
die();
