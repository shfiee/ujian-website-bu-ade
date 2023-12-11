<h2 align="center">DATA AKTOR/AKTRIS/PENYANYI</h2>
<br>
    <?php
    echo "<a href='indexx.php?page=artis_tambah'><input type='button' name='input' value='TAMBAH DATA'></a>"; 
    ?>
<table border="1" width="95%">
<?php
include "../config/koneksy.php";
$no="1";
$tampil_artis = mysqli_query($koneksy,"SELECT tb_artis.*, tb_agensi.agensi, tb_jenis_kelamin.jenis_kelamin, tb_golongan_darah.golongan_darah, 
tb_pendidikan.pendidikan, tb_jenis_pekerjaan.jenis_pekerjaan, tb_kewarganegaraan.kewarganegaraan, tb_tempat_lahir.tempat_lahir,
tb_tahun_debut.tahun_debut, tb_zodiak.zodiak FROM tb_artis, tb_agensi, tb_jenis_kelamin, tb_golongan_darah, tb_pendidikan,
tb_jenis_pekerjaan, tb_kewarganegaraan, tb_tempat_lahir, tb_tahun_debut, tb_zodiak
WHERE tb_artis.id_agensi = tb_agensi.id_agensi AND tb_artis.id_jenis_kelamin = tb_jenis_kelamin.id_jenis_kelamin AND 
tb_artis.id_golongan_darah = tb_golongan_darah.id_golongan_darah AND tb_artis.id_pendidikan = tb_pendidikan.id_pendidikan AND 
tb_artis.id_jenis_pekerjaan = tb_jenis_pekerjaan.id_jenis_pekerjaan AND tb_artis.id_kewarganegaraan = tb_kewarganegaraan.id_kewarganegaraan 
AND tb_artis.id_tempat_lahir = tb_tempat_lahir.id_tempat_lahir AND tb_artis.id_tahun_debut = tb_tahun_debut.id_tahun_debut 
AND tb_artis.id_zodiak = tb_zodiak.id_zodiak ORDER by id_artis");
?>
<?php
while ($hasil=mysqli_fetch_array($tampil_artis))
 {

?>
<tr align="center" bgcolor="#DE5971">
<td width ="5%" align = "center">NO.</td>
        <td width = "5%" align = "center">ID ARTIS</td>
        <td width = "10%" align = "center">NAMA</td>
        <td width = "10%" align = "center">NAMA PANGGUNG</td>
        <td width = "10%" align = "center">AGENSI</td>
        <td width = "20%" align = "center">JENIS KELAMIN</td>
        <td width = "15%" align = "center">GOLONGAN DARAH</td>
        <td width = "20%" align = "center">PENDIDIKAN</td>
        <td width = "20%" align = "center">JENIS PEKERJAAN</td>
        <td width = "20%" align = "center">KEWARGANEGARAAN</td>
        <td width = "20%" align = "center">TEMPAT LAHIR</td>
        <td width = "20%" align = "center">TAHUN DEBUT</td>
    </tr>
<?php
echo "<tr>";
echo "<td align = 'center'>$no</td>";
echo "<td>$hasil[id_artis]</td>";
echo "<td>$hasil[nama]</td>";
echo "<td>$hasil[nama_panggung]</td>";
echo "<td>$hasil[agensi]</td>";
echo "<td>$hasil[jenis_kelamin]</td>";
echo "<td>$hasil[golongan_darah]</td>";
echo "<td>$hasil[pendidikan]</td>";
echo "<td>$hasil[jenis_pekerjaan]</td>";
echo "<td>$hasil[kewarganegaraan]</td>";
echo "<td>$hasil[tempat_lahir]</td>";
echo "<td>$hasil[tahun_debut]</td>";
?>
     <tr align="center" bgcolor="#DE5971">
        <td width = "20%" align = "center">ZODIAK</td>
        <td width = "20%" align = "center">TANGGAL LAHIR</td>
        <td width = "20%" align = "center">TINGGI BADAN</td>
        <td width = "20%" align = "center">BERAT BADAN</td>
        <td width = "20%" align = "center">TAHUN AKTIF</td>
        <td width = "25%" align = "center">PROJEK</td>
        <td width = "25%" align = "center">PENGHARGAAN</td>
        <td width = "20%" align = "center">FOTO</td>
        <td width = "10%" align = "center" COLSPAN="2">AKSI</td>
    </tr>
    <?php
    echo "<td>$hasil[zodiak]</td>";
    echo "<td>$hasil[tanggal_lahir]</td>";
    echo "<td>$hasil[tinggi_badan]</td>";
    echo "<td>$hasil[berat_badan]</td>";
    echo "<td>$hasil[tahun_aktif]</td>";
    echo "<td>$hasil[projek]</td>";
    echo "<td>$hasil[penghargaan]</td>";
    echo "<td align='center'><img src='$hasil[foto_artis]' width=100 height=100></td>"; 
    echo "<td align='center'><a href='indexx.php?page=artis_tambah&id_artis=$hasil[id_artis]'>EDIT</a></td>";
    echo "<td align='center'><a href='#' onclick=\"if(confirm('Apakah Data Yakin DI Hapus')) 
    {window.location.href='artis_proses.php?status=hapus&id_artis=$hasil[id_artis]';}\">HAPUS</a></td>";
    echo "</tr>";
    echo "<tr><td><br></br></td></tr>";
    $no++;
}
?>
</table>