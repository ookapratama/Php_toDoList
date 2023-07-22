<?php
    include('koneksi.php');
    

    // TAMBAH SETBTA
    if(isset($_POST['tambah'])){
        $judul = $_POST['judul'];
        $isi = $_POST['isi'];
        $query=mysqli_query($conn,"INSERT INTO todolist VALUE('','$judul','$isi','')");
        echo "<script>alert('data berhasil diinput');
        document.location='index.php';</script>";
    }

    // UPDATE DATA
    if(isset($_POST['edit'])){
        $id= $_POST['id'];
        $judul = $_POST['judul'];
        $isi = $_POST['isi'];
        $query=mysqli_query($conn,"UPDATE todolist SET judul='$judul',isi='$isi',keterangan='' WHERE id='$id'");
        echo "<script>alert('data berhasil diedit');
        document.location='index.php';</script>";
    }

    // HAPUS DATA
    if(isset($_POST['hapus'])){
        $id= $_GET['id'];
        mysqli_query($conn,"DELETE FROM todolist WHERE id='$id'");
    }
?>