<h3 align = "center">DATA JENIS KELAMIN</h3>
<br></br>
<?php
echo "<a href='indexx.php?page=jeniskelamin_tambah'><input type='submit' name='input' value= 'TAMBAH DATA'></a>";
?>
<br></br>
<table border = "1" align = "center" width ="90%">
    <tr bgcolor = "#E981A4">
        <td width ="5%" align = "center">NO.</td>
        <td width = "10%" align = "center">ID JENIS KELAMIN</td>
        <td width = "20%" align = "center">JENIS KELAMIN</td>
        <td width = "10%" align = "center" COLSPAN="2">AKSI</td>
    </tr
    <tr>
    <?php
        include "../config/koneksy.php";
        $no = "1";
        $tampil_jenkl = mysqli_query($koneksy, "SELECT * FROM tb_jenis_kelamin ORDER by id_jenis_kelamin");
        while ($hasil = mysqli_fetch_array ($tampil_jenkl))
        {
           echo "<tr>";
           echo "<td align = 'center'>$no</td>";
           echo "<td>$hasil[id_jenis_kelamin]</td>";
           echo "<td>$hasil[jenis_kelamin]</td>";
           echo "<td align='center'><a href='indexx.php?page=jeniskelamin_tambah&id_jenis_kelamin=$hasil[id_jenis_kelamin]'>EDIT</td>";
           echo "<td align='center'><a href='#' onclick=\"if(confirm('Apakah data yakin dihapus?'))
           {window.location.href='jeniskelamin_proses.php?status=hapus&id_jenis_kelamin=$hasil[id_jenis_kelamin]';}\">DELETE</td>";
           echo "</tr>";
           $no++;
        }
    ?>
    </tr>
</table>