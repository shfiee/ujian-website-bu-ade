<h3 align="center">DATA ADMIN</h3>
<br></br>
<?php
    echo "<a href='indexx.php?page=admin_tambah'><input type='submit' name='input' value='TAMBAH DATA'></a>";
?>

<table border="1" style="text-align: center;" >
    <tr bgcolor=#9A81B0>
        <td width=5% >NO.</td>
        <td width=5% >USERNAME</td>
        <td width=5% >NAMA ADMIN</td>
        <td width=5% >FOTO ADMIN</td>
        <td width=5% colspan="2" >AKSI</td>

    </tr>
    <?php
    include "../config/koneksy.php";
    $no="1";
    $tampil_admin = mysqli_query ($koneksy,"SELECT * FROM tb_admin ORDER BY username");
    while ($hasil=mysqli_fetch_array($tampil_admin))
    {
        echo "<tr>";
        echo "<td>$no</td>";
        echo "<td>$hasil[username]</td>";
        echo  "<td>$hasil[nama_admin]</td>";
        echo  "<td><img src='$hasil[foto_admin]' width=100 height=100></td>";
        echo  "<td align='center'><a href='indexx.php?page=admin_tambah&username=$hasil[username]'>EDIT</a></td>";
        echo  "<td align='center'><a href='#' onclick=\"if(confirm('apakah data yakin dihapus?'))
        {window.location.href='admin_proses.php?status=hapus&username=$hasil[username]';}\">HAPUS</a></td>";
        echo "</tr>";
        $no++;
    }

    ?>
  
</table>