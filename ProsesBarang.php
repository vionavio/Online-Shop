<?php

include 'Koneksi.php';

if (isset($_POST['aksibarang2'])) {
    $aksibarang2 = $_POST['aksibarang2'];
    $id_barang = $_POST['id_barang'];
    $nama_barang = $_POST['nama_barang'];
    $harga_barang = $_POST['harga_barang'];
    $gambar_barang = $_POST['gambar_barang'];
    $strescape = $_POST['deskripsi_barang'];
    $deskripsi_barang_real_string = mysqli_real_escape_string($link, $strescape);
    $deskripsi_barang = $deskripsi_barang_real_string;
    $stok_barang = $_POST['stok_barang'];
    $id_kategori = $_POST['id_kategori'];
} else {
    $aksibarang2 = "HAPUS";
    $id_barang = $_GET['id_barang'];
}

switch ($aksibarang2) {
    case "TAMBAH" :
        $query = "insert into tbarang values ('','$nama_barang', '$harga_barang', '$gambar_barang', '$deskripsi_barang', '$stok_barang', '$id_kategori')";
        $result = mysqli_query($link, $query);
        if (mysqli_affected_rows($link)) {
            echo "<script>"
            . "window.alert('Data ditambah'); "
            . "window.location='KelolaBarang.php';"
            . "</script>";
        } else {
            echo "<script>"
            . "window.alert('Gagal tambah data'); "
            . "window.location='KelolaBarang.php';"
            . "</script>";
        }
        break;
    case "EDIT" :
        $query = "update tbarang set nama_barang='$nama_barang', harga_barang='$harga_barang', gambar_barang='$gambar_barang', deskripsi_barang='$deskripsi_barang', stok_barang='$stok_barang', id_barang='$id_barang' where id_barang='$id_barang'";
        $result = mysqli_query($link, $query);
        if (mysqli_affected_rows($link)) {
            echo "<script>"
            . "window.alert('Data diedit'); "
            . "window.location='KelolaBarang.php';"
            . "</script>";
        } else {
            echo "<script>"
            . "window.alert('Gagal edit data'); "
            . "window.location='KelolaBarang.php';"
            . "</script>";
        }
        break;
    case "HAPUS" :
        $query = "delete from tbarang where id_barang = '$id_barang'";
        $result = mysqli_query($link, $query);
        if (mysqli_affected_rows($link)) {
            echo "<script>"
            . "window.alert('Data dihapus'); "
            . "window.location='KelolaBarang.php';"
            . "</script>";
        } else {
            echo "<script>"
            . "window.alert('Gagal hapus data'); "
            . "window.location='KelolaBarang.php';"
            . "</script>";
        }
        break;
}

