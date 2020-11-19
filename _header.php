
<?php
require_once "_config/config.php";
/*
    - fungsi looping login adalah untuk membuat laman agar tidak semua orang bisa mengakses laman admin yang bersifat private
    - author : risang daniswara
    - ver : 1.0
    - Date Mod : 24 Juli 2019
    */
/*if(!isset($_SESSION['user'])){
    echo "<script>window.location='".base_url('auth/login')."';</script>";
}
*/?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Aps Absensi Admin</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?=base_url('_assets/css/bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?=base_url('_assets/css/simple-sidebar.css');?>" rel="stylesheet">
    <link rel="icon" href="<?=base_url('../8542713_f520.jpg');?>">
</head>

<body>
    <!---sidebar--->
    <script src="<?base_url('_assets/js/jquerry.js')?>"></script>
    <script src="<?base_url('_assets/js/bootstrap.min.js')?>"></script>
       <div id="wrapper">
        <div id="sidebar-wrapper">
            <ul class="nav">
                <li class="sidebar-brand">
                    <a href="#">
                        <span class="text-primary"><b>Absensi Kelas</b></span>
                    </a>
                </li>
                <li>
                    <a href="<?=base_url('dashboard')?>">Dashboard</a>
                </li>
                <li>
                    <a href="<?=base_url('siswa/data.php')?>">Absensi Siswa</a>
                </li>
                <li>
                    <a href="<?=base_url('guru/data.php')?>">Data Guru</a>
                </li>
                <li>
                    <a href="<?=base_url('kelas/data.php')?>">Data Kelas</a>
                </li>
                <li>
                    <a href="<?=base_url('informasi/data.php')?>">Data Informasi</a>
                </li>
                <li>
                    <a href="<?=base_url('riwayat/data.php')?>">Riwayat</a>
                </li>
                <li>
                    <a href="<?=base_url('auth/logout.php')?>"><span class="text-danger">Logout</span></a>
                </li>
            </ul>
        </div>
    <!---sidebar--->
        <div id="page-content-wrapper">
            <div class="container-fluid">
