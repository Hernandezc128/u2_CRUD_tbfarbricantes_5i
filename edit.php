<?php
include("./config.php");

// cek apa tombol daftar udah di klik blom
if (isset($_POST['edit_data'])) {
    // ambil data dari form
    $id = $_POST['edit_id'];
    $nom_fab = $_POST['edit_nombre'];
    $direccion = $_POST['edit_direccion'];
    $telef = $_POST['edit_telefono'];
    $email = $_POST['edit_email'];
    $fecha = $_POST['edit_fecha'];
    $estado = $_POST['edit_estado'];
    $coment = $_POST['edit_comentarios'];



    // query
    $sql = "UPDATE juegos SET Nombre del Fabricante='$nom_fab', DIreccion='$direccion', Telefono='$telef', Email='$email', Fecha de Registro='$fecha', Estado='$estado', Comentarios='$coment' WHERE id = '$id'";
    $query = mysqli_query($db, $sql);

    // cek apa query berhasil disimpan?
    if ($query)
        header('Location: ./index.php?update=sukses');
    else
        header('Location: ./index.php?update=gagal');
} else
    die("Akses dilarang...");
