<h3 align = "center">DATA AGENSI</h3>
<br></br>
<?php
echo "<a href='indexx.php?page=agensi_tambah'><input type='submit' name='input' value= 'TAMBAH DATA'></a>";
?>
<br></br>
<table border = "1" align = "center" width ="90%">
    <tr bgcolor = "#E981A4">
        <td width ="5%" align = "center">NO.</td>
        <td width = "5%" align = "center">ID AGENSI</td>
        <td width = "25%" align = "center">AGENSI</td>
        <td width = "10%" align = "center" COLSPAN="2">AKSI</td>
    </tr
    <tr>
    <?php
        include "../config/koneksy.php";
        $no = "1";
        $tampil_agensi = mysqli_query($koneksy, "SELECT * FROM tb_agensi ORDER by id_agensi");
        while ($hasil = mysqli_fetch_array ($tampil_agensi))
        {
           echo "<tr>";
           echo "<td align = 'center'>$no</td>";
           echo "<td>$hasil[id_agensi]</td>";
           echo "<td>$hasil[agensi]</td>";
           echo "<td align='center'><a href='indexx.php?page=agensi_tambah&id_agensi=$hasil[id_agensi]'>EDIT</td>";
           echo "<td align='center'><a href='#' onclick=\"if(confirm('Apakah data yakin dihapus?'))
           {window.location.href='agensi_proses.php?status=hapus&id_agensi=$hasil[id_agensi]';}\">DELETE</td>";
           echo "</tr>";
           $no++;
        }
    ?>
    </tr>
</table>