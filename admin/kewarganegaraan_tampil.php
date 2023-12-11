<h3 align = "center">DATA KEWARGANEGARAAN</h3>
<br></br>
<?php
echo "<a href='indexx.php?page=kewarganegaraan_tambah'><input type='submit' name='input' value= 'TAMBAH DATA'></a>";
?>
<br></br>
<table border = "1" align = "center" width ="90%">
    <tr bgcolor = "#E981A4">
        <td width ="5%" align = "center">NO.</td>
        <td width = "10%" align = "center">ID KEWARGANEGARAAN</td>
        <td width = "20%" align = "center">KEWARGANEGARAAN</td>
        <td width = "10%" align = "center" COLSPAN="2">AKSI</td>
    </tr
    <tr>
    <?php
        include "../config/koneksy.php";
        $no = "1";
        $tampil_kew = mysqli_query($koneksy, "SELECT * FROM tb_kewarganegaraan ORDER by id_kewarganegaraan");
        while ($hasil = mysqli_fetch_array ($tampil_kew))
        {
           echo "<tr>";
           echo "<td align = 'center'>$no</td>";
           echo "<td>$hasil[id_kewarganegaraan]</td>";
           echo "<td>$hasil[kewarganegaraan]</td>";
           echo "<td align='center'><a href='indexx.php?page=kewarganegaraan_tambah&id_kewarganegaraan=$hasil[id_kewarganegaraan]'>EDIT</td>";
           echo "<td align='center'><a href='#' onclick=\"if(confirm('Apakah data yakin dihapus?'))
           {window.location.href='kewarganegaraan_proses.php?status=hapus&id_kewarganegaraan=$hasil[id_kewarganegaraan]';}\">DELETE</td>";
           echo "</tr>";
           $no++;
        }
    ?>
    </tr>
</table>