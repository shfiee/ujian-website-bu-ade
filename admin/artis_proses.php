<?php
include "../config/koneksy.php";
if(isset($_POST['status']))
{
    $status = $_POST ['status'];
}

switch ($status){
    case 'tambah':
        $id_artis = $_POST['id_artis'];
        $nama = $_POST['nama'];
        $nama_panggung = $_POST['nama_panggung'];
        $agensi = $_POST['agensi'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $golongan_darah = $_POST['golongan_darah'];
        $pendidikan = $_POST['pendidikan'];
        $jenis_pekerjaan = $_POST['jenis_pekerjaan'];
        $kewarganegaraan = $_POST['kewarganegaraan'];
        $tempat_lahir = $_POST['tempat_lahir'];
        $tahun_debut = $_POST['tahun_debut'];
        $zodiak = $_POST['zodiak'];
        $tanggal_lahir = $_POST['tanggal_lahir'];
        $tinggi_badan = $_POST['tinggi_badan'];
        $berat_badan = $_POST['berat_badan'];
        $tahun_aktif = $_POST['tahun_aktif'];
        $projek = $_POST['projek'];
        $penghargaan = $_POST['penghargaan'];

        //input foto
        $asal = $_FILES['image']['tmp_name'];
        $simpan_foto = "../foto/".$_FILES['image']['name'];
        move_uploaded_file($asal,$simpan_foto);

        $artis_tambah = mysqli_query($koneksy, "INSERT INTO tb_artis VALUES ('$id_artis','$nama','$nama_panggung','$agensi',
        '$jenis_kelamin','$golongan_darah','$pendidikan','$jenis_pekerjaan', '$kewarganegaraan','$tempat_lahir', '$tahun_debut',
        '$zodiak','$tanggal_lahir','$tinggi_badan','$berat_badan','$tahun_aktif','$projek','$penghargaan', '$simpan_foto')");

        if ($artis_tambah==true){
            echo "<script>alert ('Tambah Data artis Berhasil') </script>";
        } else {
            echo "<script>alert ('Tambah Data artis Gagal') </script>";
        }
        break;

        case 'edit':
            $id_artis = $_POST['id_artis'];
            $nama = $_POST['nama'];
            $nama_panggung = $_POST['nama_panggung'];
            $agensi = $_POST['agensi'];
            $jenis_kelamin = $_POST['jenis_kelamin'];
            $golongan_darah = $_POST['golongan_darah'];
            $pendidikan = $_POST['pendidikan'];
            $jenis_pekerjaan = $_POST['jenis_pekerjaan'];
            $kewarganegaraan = $_POST['kewarganegaraan'];
            $tempat_lahir = $_POST['tempat_lahir'];
            $tahun_debut = $_POST['tahun_debut'];
            $zodiak = $_POST['zodiak'];
            $tanggal_lahir = $_POST['tanggal_lahir'];
            $tinggi_badan = $_POST['tinggi_badan'];
            $berat_badan = $_POST['berat_badan'];
            $tahun_aktif = $_POST['tahun_aktif'];
            $projek = $_POST['projek'];
            $penghargaan = $_POST['penghargaan'];
            $centang = $_POST['centang'];

            //untuk edit foto
            if($centang==1){
                $asal = $_FILES['image']['tmp_name'];
                $simpan_foto = "../foto/".$_FILES['image']['name'];
                move_uploaded_file($asal,$simpan_foto);
                }

        $artis_edit = mysqli_query($koneksy, "UPDATE tb_artis SET id_artis = '$id_artis', nama = '$nama', nama_panggung = '$nama_panggung', 
        id_agensi = '$agensi', id_jenis_kelamin = '$jenis_kelamin', id_golongan_darah = '$golongan_darah', id_pendidikan = '$pendidikan', 
        id_jenis_pekerjaan = '$jenis_pekerjaan', id_kewarganegaraan = '$kewarganegaraan', id_tempat_lahir = '$tempat_lahir', id_tahun_debut ='$tahun_debut', 
        id_zodiak = '$zodiak', tanggal_lahir = '$tanggal_lahir', tinggi_badan = '$tinggi_badan', berat_badan = '$berat_badan', 
        tahun_aktif = '$tahun_aktif', projek = '$projek', penghargaan = '$penghargaan', foto_artis = '$simpan_foto' 
        WHERE id_artis = '$id_artis'");
        

            if ($artis_edit==true){
                echo "<script>alert ('Edit Data artis Berhasil') </script>";
            } else {
                echo "<script>alert ('Edit Data artis Gagal') </script>";
            }
        break;

        default:
        $id_artis = $_GET['id_artis'];
        $artis_hapus = mysqli_query($koneksy, "DELETE FROM tb_artis WHERE id_artis = '$id_artis'");
        if ($artis_hapus ==true){
            echo "<script>alert ('Hapus Data artis Berhasil') </script>";
        } else {
            echo "<script>alert ('Hapus Data artis Gagal') </script>";
        }
         break;
}
?>

<meta http-equiv= "refresh" content= "0;indexx.php?page=artis_tampil">