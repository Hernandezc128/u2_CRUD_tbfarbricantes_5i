<?php
include("./config.php");

if (isset($_POST['enviar'])) {
    $nom_fab = $_POST['nombre'];
    $direcc = $_POST['direccion'];
    $telef = $_POST['tel'];
    $email = $_POST['email'];
    $fechreg = $_POST['fechareg'];
    $estado = $_POST['estado'];
    $coment = $_POST['coment'];

    $sql = "INSERT INTO fabricantes(nom_fab, direcc, tel, email, fecha_reg, estad, coment)
    VALUES('$nom_fab', '$direcc', '$telef', '$email', '$fechreg', '$estado','$coment')";
    $query = mysqli_query($db, $sql);

    if ($query)
        header('Location: ./index.php?status=sukses');
    else
        header('Location: ./index.php?status=gagal');
} else
    die("Akses dilarang...");
