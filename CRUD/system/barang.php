<?php
session_start();
include "koneksi.php";

if ($_GET['act'] == 'tambahBarang') {
    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
    $jumlah = $_POST['jumlah'];
    $satuan = $_POST['satuan'];
    $hbeli = $_POST['hbeli'];
    $status = $_POST['status'];

    $querytambah = mysqli_query($conn, "INSERT INTO barang VALUE('','$kode','$nama','$jumlah','$satuan','$hbeli','$status')");
    if ($querytambah) {
        header("location: " . $base_url . "index.php?page=barang&alert=1");
    } else {
        header("location: " . $base_url . "index.php?page=barang&alert=2");
    }

} else if ($_GET['act'] == 'updateBarang') {
    $id = $_POST['id'];
    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
    $jumlah = $_POST['jumlah'];
    $satuan = $_POST['satuan'];
    $hbeli = $_POST['hbeli'];
    $status = $_POST['status'];

    $queryupdate = mysqli_query($conn, "UPDATE barang SET nama_barang='$nama', jumlah_barang='$jumlah', satuan_barang='$satuan', harga_beli='$hbeli', status_barang='$status' WHERE id_barang = '$id'");

    if ($queryupdate) {
        header("location: " . $base_url . "index.php?page=barang&alert=3");
    } else {
        header("location: " . $base_url . "index.php?page=barang&alert=4");
    }
} else if ($_GET['act'] == 'deleteBarang') {
    $id = $_POST['id'];

    $querydelete = mysqli_query($conn, "DELETE FROM barang WHERE id_barang = '$id'");

    if ($querydelete) {
        header("location: " . $base_url . "index.php?page=barang&alert=5");
    } else {
        header("location: " . $base_url . "index.php?page=barang&alert=6");
    }
}
mysqli_close($conn);
