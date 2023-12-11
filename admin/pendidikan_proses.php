<?php
    include "../config/koneksy.php";
    if(isset($_POST['status']))
    {
        $status = $_POST ['status'];
    }

switch ($status){
    case 'tambah':
        $id_pendidikan = $_POST['id_pendidikan'];
        $pendidikan = $_POST['pendidikan'];
        $guru_tambah = mysqli_query($koneksy,"INSERT INTO tb_pendidikan VALUES ('$id_pendidikan','$pendidikan')");
        if ($guru_tambah==true){
            echo "<script>alert ('Tambah Data pendidikan Berhasil')</script>";
        } else {
            echo "<script>alert ('Tambah Data pendidikan Gagal')</script>";
        }
        break;
    case 'edit':
        $id_pendidikan = $_POST['id_pendidikan'];
        $pendidikan = $_POST['pendidikan'];
        $pen_edit = mysqli_query($koneksy,"UPDATE tb_pendidikan SET id_pendidikan = '$id_pendidikan', pendidikan = '$pendidikan' 
        WHERE id_pendidikan='$id_pendidikan'");
        if ($pen_edit==true){
            echo "<script>alert ('Edit Data pendidikan Berhasil')</script>";
        } else {
            echo "<script>alert ('Edit Data pendidikan Gagal')</script>";
        }
        break;
        default:
            $id_pendidikan = $_GET['id_pendidikan'];
            $pen_hapus = mysqli_query($koneksy,"DELETE FROM tb_pendidikan WHERE id_pendidikan='$id_pendidikan'");
            if ($pen_hapus==true){
                echo "<script>alert ('Hapus Data pendidikan Berhasil')</script>";
            } else {
                echo "<script>alert ('Hapus Data pendidikan Gagal')</script>";
            }
            break;
    }
?>

<meta http-equiv= "refresh" content= "0;indexx.php?page=pendidikan_tampil">