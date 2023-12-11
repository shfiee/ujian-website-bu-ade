<h3 align = "center">DATA GOLONGAN DARAH</h3>
<br></br>
<?php
echo "<a href='indexx.php?page=goldar_tambah'><input type='submit' name='input' value= 'TAMBAH DATA'></a>";
?>
<br></br>
<table border = "1" align = "center" width ="90%">
    <tr bgcolor = "#E981A4">
        <td width ="5%" align = "center">NO.</td>
        <td width = "10%" align = "center">ID GOLONGAN DARAH</td>
        <td width = "20%" align = "center">GOLONGAN DARAH</td>
        <td width = "10%" align = "center" COLSPAN="2">AKSI</td>
    </tr
    <tr>
    <?php
        include "../config/koneksy.php";
        $no = "1";
        $tampil_goldar = mysqli_query($koneksy, "SELECT * FROM tb_golongan_darah ORDER by id_golongan_darah");
        while ($hasil = mysqli_fetch_array ($tampil_goldar))
        {
           echo "<tr>";
           echo "<td align = 'center'>$no</td>";
           echo "<td>$hasil[id_golongan_darah]</td>";
           echo "<td>$hasil[golongan_darah]</td>";
           echo "<td align='center'><a href='indexx.php?page=goldar_tambah&id_golongan_darah=$hasil[id_golongan_darah]'>EDIT</td>";
           echo "<td align='center'><a href='#' onclick=\"if(confirm('Apakah data yakin dihapus?'))
           {window.location.href='goldar_proses.php?status=hapus&id_golongan_darah=$hasil[id_golongan_darah]';}\">DELETE</td>";
           echo "</tr>";
           $no++;
        }
    ?>
    </tr>
</table>