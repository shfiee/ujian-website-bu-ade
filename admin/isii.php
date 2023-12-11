<?php
    if(isset($_GET['page']))
    {
        SWITCH ($_GET['page'])
        {
            case 'agensi_tampil':
                include "agensi_tampil.php";
            break;
            case 'agensi_tambah':
                include "agensi_tambah.php";
            break;

            case 'artis_tampil':
                include "artis_tampil.php";
            break;
            case 'artis_tambah':
                include "artis_tambah.php";
            break;

            case 'debut_tampil':
                include "debut_tampil.php";
            break;
            case 'debut_tambah':
                include "debut_tambah.php";
            break;

            case 'goldar_tampil':
                include "goldar_tampil.php";
            break;
            case 'goldar_tambah':
                include "goldar_tambah.php";
            break;

            case 'jeniskelamin_tampil':
                include "jeniskelamin_tampil.php";
            break;
            case 'jeniskelamin_tambah':
                include "jeniskelamin_tambah.php";
            break;

            case 'jenispekerjaan_tamppil':
                include "jenispekerjaan_tamppil.php";
                break;
            case 'jenispekerjaan_tambah':
                include "jenispekerjaan_tambah.php";
                break;

            case 'kewarganegaraan_tampil':
                include "kewarganegaraan_tampil.php";
            break;
            case 'kewarganegaraan_tambah':
                include "kewarganegaraan_tambah.php";
            break;

            case 'pendidikan_tampil':
                include "pendidikan_tampil.php";
            break;
            case 'pendidikan_tambah':
                include "pendidikan_tambah.php";
            break;

            case 'tempatlahir_tampil':
                include "tempatlahir_tampil.php";
            break;
            case 'tempatlahir_tambah':
                include "tempatlahir_tambah.php";
            break;

            case 'zodiak_tampil':
                include "zodiak_tampil.php";
            break;
            case 'zodiak_tambah':
                include "zodiak_tambah.php";
            break;

            case 'admin_tampil':
                include "admin_tampil.php";
            break;
            case 'admin_tambah':
                include "admin_tambah.php";
            break;
        }
    }
?>