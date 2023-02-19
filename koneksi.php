<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "dbnilai_diki";

$koneksi = mysqli_connect($host,$user,$pass,$db);
if (!$koneksi) {
    die("koneksi tidak berhasil : " . mysqli_connect_error());
}