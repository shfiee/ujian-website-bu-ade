<h3 align = "center">DATA TEMPAT LAHIR</h3>
<br></br>
<?php
echo "<a href='indexx.php?page=tempatlahir_tambah'><input type='submit' name='input' value= 'TAMBAH DATA'></a>";
?>
<br></br>
<table border = "1" align = "center" width ="90%">
    <tr bgcolor = "#E981A4">
        <td width ="5%" align = "center">NO.</td>
        <td width = "10%" align = "center">ID TEMPAT LAHIR</td>
        <td width = "20%" align = "center">TEMPAT LAHIR</td>
        <td width = "10%" align = "center" COLSPAN="2">AKSI</td>
    </tr
    <tr>
    <?php
        include "../config/koneksy.php";
        $no = "1";
        $tampil_tmp = mysqli_query($koneksy, "SELECT * FROM tb_tempat_lahir ORDER by id_tempat_lahir");
        while ($hasil = mysqli_fetch_array ($tampil_tmp))
        {
           echo "<tr>";
           echo "<td align = 'center'>$no</td>";
           echo "<td>$hasil[id_tempat_lahir]</td>";
           echo "<td>$hasil[tempat_lahir]</td>";
           echo "<td align='center'><a href='indexx.php?page=tempatlahir_tambah&id_tempat_lahir=$hasil[id_tempat_lahir]'>EDIT</td>";
           echo "<td align='center'><a href='#' onclick=\"if(confirm('Apakah data yakin dihapus?'))
           {window.location.href='tempatlahir_proses.php?status=hapus&id_tempat_lahir=$hasil[id_tempat_lahir]';}\">DELETE</td>";
           echo "</tr>";
           $no++;
        }
    ?>
    </tr>
</table>