<h3 align = "center">DATA PENDIDIKAN</h3>
<br></br>
<?php
echo "<a href='indexx.php?page=pendidikan_tambah'><input type='submit' name='input' value= 'TAMBAH DATA'></a>";
?>
<br></br>
<table border = "1" align = "center" width ="90%">
    <tr bgcolor = "#E981A4">
        <td width ="5%" align = "center">NO.</td>
        <td width = "10%" align = "center">ID PENDIDIKAN</td>
        <td width = "20%" align = "center">PENDIDIKAN</td>
        <td width = "10%" align = "center" COLSPAN="2">AKSI</td>
    </tr
    <tr>
    <?php
        include "../config/koneksy.php";
        $no = "1";
        $tampil_pen = mysqli_query($koneksy, "SELECT * FROM tb_pendidikan ORDER by id_pendidikan");
        while ($hasil = mysqli_fetch_array ($tampil_pen))
        {
           echo "<tr>";
           echo "<td align = 'center'>$no</td>";
           echo "<td>$hasil[id_pendidikan]</td>";
           echo "<td>$hasil[pendidikan]</td>";
           echo "<td align='center'><a href='indexx.php?page=pendidikan_tambah&id_pendidikan=$hasil[id_pendidikan]'>EDIT</td>";
           echo "<td align='center'><a href='#' onclick=\"if(confirm('Apakah data yakin dihapus?'))
           {window.location.href='pendidikan_proses.php?status=hapus&id_pendidikan=$hasil[id_pendidikan]';}\">DELETE</td>";
           echo "</tr>";
           $no++;
        }
    ?>
    </tr>
</table>