<?php
    include "../config/koneksy.php";
    if(isset($_POST['status']))
    {
        $status = $_POST ['status'];
    }

switch ($status){
    case 'tambah':
        $id_tahun_debut = $_POST['id_tahun_debut'];
        $tahun_debut = $_POST['tahun_debut'];
        $guru_tambah = mysqli_query($koneksy,"INSERT INTO tb_tahun_debut VALUES ('$id_tahun_debut','$tahun_debut')");
        if ($guru_tambah==true){
            echo "<script>alert ('Tambah Data debut Berhasil')</script>";
        } else {
            echo "<script>alert ('Tambah Data debut Gagal')</script>";
        }
        break;
    case 'edit':
        $id_tahun_debut = $_POST['id_tahun_debut'];
        $tahun_debut = $_POST['tahun_debut'];
        $deb_edit = mysqli_query($koneksy,"UPDATE tb_tahun_debut SET id_tahun_debut = '$id_tahun_debut', tahun_debut = '$tahun_debut' 
        WHERE id_tahun_debut='$id_tahun_debut'");
        if ($deb_edit==true){
            echo "<script>alert ('Edit Data debut Berhasil')</script>";
        } else {
            echo "<script>alert ('Edit Data debut Gagal')</script>";
        }
        break;
        default:
            $id_tahun_debut = $_GET['id_tahun_debut'];
            $deb_hapus = mysqli_query($koneksy,"DELETE FROM tb_tahun_debut WHERE id_tahun_debut='$id_tahun_debut'");
            if ($deb_hapus==true){
                echo "<script>alert ('Hapus Data debut Berhasil')</script>";
            } else {
                echo "<script>alert ('Hapus Data debut Gagal')</script>";
            }
            break;
    }
?>

<meta http-equiv= "refresh" content= "0;indexx.php?page=debut_tampil">