<?php

$host = "kxyy.my.id";
$user = "rplsmk4padalaran_kxyy";
$pass = "UPnguZyb";
$db = "rplsmk4padalaran_kxyy";

$koneksi = mysqli_connect($host,$user,$pass,$db);
if (!$koneksi) {
    die("koneksi tidak berhasil : " . mysqli_connect_error());
}