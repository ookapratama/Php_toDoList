<?php
    include('koneksi.php');
    $id= $_GET['id'];

    // TAMBAH SETBTA
    if(isset($_POST['tambah'])){
        $judul = $_POST['judul'];
        $isi = $_POST['isi'];
        $keterangan = $_POST['keterangan'];
        $query=mysqli_query($conn,"INSERT INTO todolist VALUE('','$judul','$isi','$keterangan')");
    }

    // UPDATE DATA
    if(isset($_POST['edit'])){
        $judul = $_POST['judul'];
        $isi = $_POST['isi'];
        $keterangan = $_POST['keterangan'];
        $query=mysqli_query($conn,"UPDATE todolist SET judul='$judul',isi='$isi',keterangan='$keterangan' WHERE id='$id'");
    }

    // HAPUS DATA
    if(isset($_POST['hapus'])){
        mysqli_query($conn,"DELETE FROM todolist WHERE id='$id'");
    }
?>