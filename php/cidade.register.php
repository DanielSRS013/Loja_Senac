<?php

    require_once('./cidade.crud.php');

    if($_POST['txtCidade'] == NULL || $_POST['txtUf'] == NULL)
    {
        header('location: error.php?status=access-deny'); 
        die();
    }

    $result = fnAddCidade($_POST['txtCidade'], $_POST['txtUf']);
    echo $result;