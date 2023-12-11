<?php
   include "../config/koneksy.php";
   //
   if(isset($_GET['id_artis'])){
    //
    $artis_ambil = mysqli_query($koneksy,"SELECT * FROM tb_artis WHERE id_artis ='$_GET[id_artis]'")
    or die (mysqli_error());
    $artis_edit = mysqli_fetch_array ($artis_ambil);
   }
?>

<form action = "artis_proses.php" method= "post" enctype="multipart/form-data">
    <?php
    if(isset($_GET['id_artis']))
    {
        echo "<input type = 'hidden' name= 'status' value='edit'>";
    } else {
        echo "<input type = 'hidden' name= 'status' value='tambah'>";
    }
    ?>

  <table>
  <tr>
        <td colspan="3" align = "center">
           <h3>TAMBAH DATA AKTOR/AKTRIS/PENYANYI</h3>
        </td>
    </tr>
    <tr>
        <td>Id artis</td>
        <td>:</td>
        <td> <input type = "text" maxlength="11" size="11" name= "id_artis" value = "<?php echo @$artis_edit['id_artis'];?>"> </td>
    </tr>
    <tr>
        <td>Nama</td>
        <td>:</td>
        <td> <input type = "text" maxlength="50" size="40" name= "nama" value = "<?php echo @$artis_edit['nama'];?>"> </td>
    </tr>
    <tr>
        <td>Nama Panggung</td>
        <td>:</td>
        <td> <input type = "text" maxlength="50" size="40" name= "nama_panggung" value = "<?php echo @$artis_edit['nama_panggung'];?>"> </td>
    </tr>
    <tr>
        <td>AGENSI</td>
        <td>:</td>
        <td> 
            <select name="agensi">
                <?php
                    $ambil_agensi = mysqli_query($koneksy, "SELECT * FROM tb_agensi");
                    WHILE ($agensi = mysqli_fetch_array($ambil_agensi))
                    {
                        echo "<option value='$agensi[id_agensi]'>$agensi[agensi]</option>";
                    }
                ?>
            </select>
        </td>
    </tr>
    <tr>
        <td>JENIS KELAMIN</td>
        <td>:</td>
        <td> 
            <select name="jenis_kelamin">
                <?php
                    $ambil_jenkl = mysqli_query($koneksy, "SELECT * FROM tb_jenis_kelamin");
                    WHILE ($jenis_kelamin = mysqli_fetch_array($ambil_jenkl))
                    {
                        echo "<option value='$jenis_kelamin[id_jenis_kelamin]'>$jenis_kelamin[jenis_kelamin]</option>";
                    }
                ?>
            </select>
        </td>
    </tr>
    <tr>
        <td>GOLONGAN DARAH</td>
        <td>:</td>
        <td> 
            <select name="golongan_darah">
                <?php
                    $ambil_goldar = mysqli_query($koneksy, "SELECT * FROM tb_golongan_darah");
                    WHILE ($golongan_darah = mysqli_fetch_array($ambil_goldar))
                    {
                        echo "<option value='$golongan_darah[id_golongan_darah]'>$golongan_darah[golongan_darah]</option>";
                    }
                ?>
            </select>
        </td>
    </tr>
    <tr>
        <td>PENDIDIKAN</td>
        <td>:</td>
        <td> 
            <select name="pendidikan">
                <?php
                    $ambil_pendidikan = mysqli_query($koneksy, "SELECT * FROM tb_pendidikan");
                    WHILE ($pendidikan = mysqli_fetch_array($ambil_pendidikan))
                    {
                        echo "<option value='$pendidikan[id_pendidikan]'>$pendidikan[pendidikan]</option>";
                    }
                ?>
            </select>
        </td>
    </tr>
    <tr>
        <td>JENIS PEKERJAAN</td>
        <td>:</td>
        <td> 
            <select name="jenis_pekerjaan">
                <?php
                    $ambil_jenpkr = mysqli_query($koneksy, "SELECT * FROM tb_jenis_pekerjaan");
                    WHILE ($jenis_pekerjaan = mysqli_fetch_array($ambil_jenpkr))
                    {
                        echo "<option value='$jenis_pekerjaan[id_jenis_pekerjaan]'>$jenis_pekerjaan[jenis_pekerjaan]</option>";
                    }
                ?>
            </select>
        </td>
    </tr>
    <tr>
        <td>KEWARGANEGARAAN</td>
        <td>:</td>
        <td> 
            <select name="kewarganegaraan">
                <?php
                    $ambil_kwrgn = mysqli_query($koneksy, "SELECT * FROM tb_kewarganegaraan");
                    WHILE ($kewarganegaraan = mysqli_fetch_array($ambil_kwrgn))
                    {
                        echo "<option value='$kewarganegaraan[id_kewarganegaraan]'>$kewarganegaraan[kewarganegaraan]</option>";
                    }
                ?>
            </select>
        </td>
    </tr>
    <tr>
        <td>TEMPAT LAHIR</td>
        <td>:</td>
        <td> 
            <select name="tempat_lahir">
                <?php
                    $ambil_tempat = mysqli_query($koneksy, "SELECT * FROM tb_tempat_lahir");
                    WHILE ($tempat_lahir = mysqli_fetch_array($ambil_tempat))
                    {
                        echo "<option value='$tempat_lahir[id_tempat_lahir]'>$tempat_lahir[tempat_lahir]</option>";
                    }
                ?>
            </select>
        </td>
    </tr>
    <tr>
        <td>TAHUN DEBUT</td>
        <td>:</td>
        <td> 
            <select name="tahun_debut">
                <?php
                    $ambil_debut = mysqli_query($koneksy, "SELECT * FROM tb_tahun_debut");
                    WHILE ($tahun_debut = mysqli_fetch_array($ambil_debut))
                    {
                        echo "<option value='$tahun_debut[id_tahun_debut]'>$tahun_debut[tahun_debut]</option>";
                    }
                ?>
            </select>
        </td>
    </tr>
    <tr>
        <td>ZODIAK</td>
        <td>:</td>
        <td> 
            <select name="zodiak">
                <?php
                    $ambil_zodiak = mysqli_query($koneksy, "SELECT * FROM tb_zodiak");
                    WHILE ($zodiak = mysqli_fetch_array($ambil_zodiak))
                    {
                        echo "<option value='$zodiak[id_zodiak]'>$zodiak[zodiak]</option>";
                    }
                ?>
            </select>
        </td>
    </tr>
    <tr>
        <td>tanggal Lahir</td>
        <td>:</td>
        <td> <input type = "date" maxlength="30" size="30" name= "tanggal_lahir" value = "<?php echo @$artis_edit['tanggal_lahir'];?>"> </td>
    </tr>
    <tr>
        <td>Tinggi Badan</td>
        <td>:</td>
        <td> <input type = "text" maxlength="30" size="30" name= "tinggi_badan" value = "<?php echo @$artis_edit['tinggi_badan'];?>"> </td>
    </tr>
    <tr>
        <td>Berat Badan</td>
        <td>:</td>
        <td> <input type = "text" maxlength="30" size="30" name= "berat_badan" value = "<?php echo @$artis_edit['berat_badan'];?>"> </td>
    </tr>
    <tr>
        <td>Tahun Aktif</td>
        <td>:</td>
        <td> <input type = "text" maxlength="50" size="50" name= "tahun_aktif" value = "<?php echo @$artis_edit['tahun_aktif'];?>"> </td>
    </tr>
    <tr>
        <td>Projek</td>
        <td>:</td>
        <td> <input type = "text" maxlength="60" size="60" name= "projek" value = "<?php echo @$artis_edit['projek'];?>"> </td>
    </tr>
    <tr>
        <td>penghargaan</td>
        <td>:</td>
        <td> <input type = "text" maxlength="80" size="80" name= "penghargaan" value = "<?php echo @$artis_edit['penghargaan'];?>"> </td>
    </tr>
    <tr>
        <td>Foto</td>
        <td>:</td>
        <td> 
        <?php
            if(isset($_GET['id_artis'])){
                echo"<img src='$artis_edit[foto_artis]' width=100 height=100>";
            }
        ?>
        <input type = "file" name= "image" value = "<?php echo @$artis_edit['foto_artis'];?>">
        <?php
            if(isset($_GET['id_artis'])){?>
            </br><input type="checkbox" name="centang" value="1" /> centang jika ingin ganti Foto
            <?php } ?>
        </td>
    </tr>

    <tr>
        <td colspan="3" align = "center">
            <input type = "submit" value="SIMPAN">
            <input type = "submit" value="BATAL">
        </td>
    </tr>

  </table>
</form>