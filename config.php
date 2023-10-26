<?php

$servidor = "localhost";
$usuario = "root";
$contraseña = "";
$nom_base = "bd_produc_med";

$db = mysqli_connect($servidor, $usuario, $contraseña, $nom_base);

if (!$db)
    die("No se conecto a la base: " . mysqli_connect_error());
