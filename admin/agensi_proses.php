<?php
    include "../config/koneksy.php";
    if(isset($_POST['status']))
    {
        $status = $_POST ['status'];
    }

switch ($status){
    case 'tambah':
        $id_agensi = $_POST['id_agensi'];
        $agensi = $_POST['agensi'];
        $agensi_tambah = mysqli_query($koneksy,"INSERT INTO tb_agensi VALUES ('$id_agensi','$agensi')");
        if ($agensi_tambah==true){
            echo "<script>alert ('Tambah Data Agensi Berhasil')</script>";
        } else {
            echo "<script>alert ('Tambah Data Agensi Gagal')</script>";
        }
        break;
    case 'edit':
        $id_agensi = $_POST['id_agensi'];
        $agensi = $_POST['agensi'];
        $agensi_edit = mysqli_query($koneksy,"UPDATE tb_agensi SET id_agensi = '$id_agensi', agensi = '$agensi' WHERE id_agensi='$id_agensi'");
        if ($agensi_edit==true){
            echo "<script>alert ('Edit Data Agensi Berhasil')</script>";
        } else {
            echo "<script>alert ('Edit Data Agensi Gagal')</script>";
        }
        break;
        default:
            $id_agensi = $_GET['id_agensi'];
            $agensi_hapus = mysqli_query($koneksy,"DELETE FROM tb_agensi WHERE id_agensi='$id_agensi'");
            if ($agensi_hapus==true){
                echo "<script>alert ('Hapus Data Agensi Berhasil')</script>";
            } else {
                echo "<script>alert ('Hapus Data Agensi Gagal')</script>";
            }
            break;
    }
?>

<meta http-equiv= "refresh" content= "0;indexx.php?page=agensi_tampil">