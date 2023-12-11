<h3 align = "center">DATA TAHUN DEBUT</h3>
<br></br>
<?php
echo "<a href='indexx.php?page=debut_tambah'><input type='submit' name='input' value= 'TAMBAH DATA'></a>";
?>
<br></br>
<table border = "1" align = "center" width ="90%">
    <tr bgcolor = "#E981A4">
        <td width ="5%" align = "center">NO.</td>
        <td width = "10%" align = "center">ID TAHUN DEBUT</td>
        <td width = "20%" align = "center">TAHUN DEBUT</td>
        <td width = "10%" align = "center" COLSPAN="2">AKSI</td>
    </tr
    <tr>
    <?php
        include "../config/koneksy.php";
        $no = "1";
        $tampil_deb = mysqli_query($koneksy, "SELECT * FROM tb_tahun_debut ORDER by id_tahun_debut");
        while ($hasil = mysqli_fetch_array ($tampil_deb))
        {
           echo "<tr>";
           echo "<td align = 'center'>$no</td>";
           echo "<td>$hasil[id_tahun_debut]</td>";
           echo "<td>$hasil[tahun_debut]</td>";
           echo "<td align='center'><a href='indexx.php?page=debut_tambah&id_tahun_debut=$hasil[id_tahun_debut]'>EDIT</td>";
           echo "<td align='center'><a href='#' onclick=\"if(confirm('Apakah data yakin dihapus?'))
           {window.location.href='debut_proses.php?status=hapus&id_tahun_debut=$hasil[id_tahun_debut]';}\">DELETE</td>";
           echo "</tr>";
           $no++;
        }
    ?>
    </tr>
</table>