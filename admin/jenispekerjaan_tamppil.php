<h3 align = "center">DATA JENIS PEKERJAAN</h3>
<br></br>
<?php
echo "<a href='indexx.php?page=jenispekerjaan_tambah'><input type='submit' name='input' value= 'TAMBAH DATA'></a>";
?>
<br></br>
<table border = "1" align = "center" width ="90%">
    <tr bgcolor = "#E981A4">
        <td width ="5%" align = "center">NO.</td>
        <td width = "10%" align = "center">ID JENIS PEKERJAAN</td>
        <td width = "20%" align = "center">JENIS PEKERJAAN</td>
        <td width = "10%" align = "center" COLSPAN="2">AKSI</td>
    </tr
    <tr>
    <?php
        include "../config/koneksy.php";
        $no = "1";
        $tampil_jenpkr = mysqli_query($koneksy, "SELECT * FROM tb_jenis_pekerjaan ORDER by id_jenis_pekerjaan");
        while ($hasil = mysqli_fetch_array ($tampil_jenpkr))
        {
           echo "<tr>";
           echo "<td align = 'center'>$no</td>";
           echo "<td>$hasil[id_jenis_pekerjaan]</td>";
           echo "<td>$hasil[jenis_pekerjaan]</td>";
           echo "<td align='center'><a href='indexx.php?page=jenispekerjaan_tambah&id_jenis_pekerjaan=$hasil[id_jenis_pekerjaan]'>EDIT</td>";
           echo "<td align='center'><a href='#' onclick=\"if(confirm('Apakah data yakin dihapus?'))
           {window.location.href='jenispekerjaan_proses.php?status=hapus&id_jenis_pekerjaan=$hasil[id_jenis_pekerjaan]';}\">DELETE</td>";
           echo "</tr>";
           $no++;
        }
    ?>
    </tr>
</table>