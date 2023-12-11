<?php
    include "../config/koneksy.php";
    if(isset($_POST['status']))
    {
        $status = $_POST ['status'];
    }

switch ($status){
    case 'tambah':
        $id_tempat_lahir = $_POST['id_tempat_lahir'];
        $tempat_lahir = $_POST['tempat_lahir'];
        $guru_tambah = mysqli_query($koneksy,"INSERT INTO tb_tempat_lahir VALUES ('$id_tempat_lahir','$tempat_lahir')");
        if ($guru_tambah==true){
            echo "<script>alert ('Tambah Data tempat lahir Berhasil')</script>";
        } else {
            echo "<script>alert ('Tambah Data tempat lahir Gagal')</script>";
        }
        break;
    case 'edit':
        $id_tempat_lahir = $_POST['id_tempat_lahir'];
        $tempat_lahir = $_POST['tempat_lahir'];
        $tmp_edit = mysqli_query($koneksy,"UPDATE tb_tempat_lahir SET id_tempat_lahir = '$id_tempat_lahir', tempat_lahir = '$tempat_lahir' 
        WHERE id_tempat_lahir='$id_tempat_lahir'");
        if ($tmp_edit==true){
            echo "<script>alert ('Edit Data tempat lahir Berhasil')</script>";
        } else {
            echo "<script>alert ('Edit Data tempat lahir Gagal')</script>";
        }
        break;
        default:
            $id_tempat_lahir = $_GET['id_tempat_lahir'];
            $tmp_hapus = mysqli_query($koneksy,"DELETE FROM tb_tempat_lahir WHERE id_tempat_lahir='$id_tempat_lahir'");
            if ($tmp_hapus==true){
                echo "<script>alert ('Hapus Data tempat lahir Berhasil')</script>";
            } else {
                echo "<script>alert ('Hapus Data tempat lahir Gagal')</script>";
            }
            break;
    }
?>

<meta http-equiv= "refresh" content= "0;URL=indexx.php?page=tempatlahir_tampil">