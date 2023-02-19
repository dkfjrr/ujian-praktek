<?php
include "koneksi.php";

if (isset($_POST['submit'])) {

    $ssimpan = mysqli_query($koneksi, "insert into siswa set
                nisn = '$_POST[snisn]',
                nama = '$_POST[snama]',
                kelas= '$_POST[skelas]',
                tanggal_lahir= '$_POST[stgl]'");
                header('location:indexadmin.php#data_siswa');
}

if (isset($_POST['bubah'])) {

    $subah = mysqli_query($koneksi, "update siswa set
            nama = '$_POST[snama]',
            kelas = '$_POST[skelas]',
            tanggal_lahir = '$_POST[stgl]'  
            WHERE nisn = '$_POST[nisn]'");
            header('location:indexadmin.php#data_siswa');

}

if (isset($_POST['bhapus'])) {

    $shapus = mysqli_query($koneksi, "selete from siswa where nisn= '$_POST[nisn]' ");
    header('location:indexadmin.php#data_siswa');
}

if (isset($_POST['gsubmit'])) {

    $gsimpan = mysqli_query($koneksi, "insert into guru set
                nip = '$_POST[gnip]',
                nama = '$_POST[gnama]',
                jabatan = '$_POST[gjabatan]'");
                header('location:indexadmin.php#data_guru');
}


if (isset($_POST['gubah'])) {

    $gubah = mysqli_query($koneksi, "update guru set
            nama = '$_POST[gnama]',
            jabatan = '$_POST[gjabatan]'  
            WHERE nip = '$_POST[gnip]'");
            header('location:indexadmin.php#data_guru');

}


if (isset($_POST['ghapus'])) {

    $ghapus = mysqli_query($koneksi, "delete from guru where nip= '$_POST[nip]' ");
    header('location:indexadmin.php#data_nilai');
}

if (isset($_POST['nsubmit'])) {

    $ssimpan = mysqli_query($koneksi, "insert into nilai set
                nisn = '$_POST[nnisn]',
                mapel = '$_POST[mapel]',
                nilai1 = '$_POST[nilai1]',
                nilai2 = '$_POST[nilai2]'");
                header('location:indexadmin.php#data_nilai');
}

if (isset($_POST['nubah'])) {

    $ssimpan = mysqli_query($koneksi, "update nilai set
                mapel = '$_POST[mapel]',
                nilai1 = '$_POST[nilai1]',
                nilai2 = '$_POST[nilai2]
                nisn = '$_POST[nnisn]'");
                header('location:indexadmin.php#data_nilai');
}

if (isset($_POST['nhapus'])) {

    $shapus = mysqli_query($koneksi, "delete from nilai where nisn= '$_POST[nisn]' ");
    header('location:indexadmin.php#data_nilai');
}

if (isset($_POST['hitung'])) {
    $nisn = $_POST['nnisn'];
    $mapel = $_POST['mapel'];
    $nilai_pengetahuan = $_POST['nilai1'];
    $nilai_keterampilan = $_POST['nilai2'];

    $hasil = ($nilai_pengetahuan + $nilai_keterampilan) / 2;

    if ($hasil >= 90) {
        $grade = "Lulus predikat A";
    } elseif ($hasil >= 75) {
        $grade = "Lulus predikat B";
    } elseif ($hasil < 70) {
        $grade = "Lulus predikat C";
    }


    echo "Nisn : $nisn <br/>";
    echo "Mapel : $mapel <br/>";
    echo "Nilai Pengetahuan : $nilai_pengetahuan <br/>";
    echo "Nilai Keterampilan : $nilai_keterampilan <br/>";

    echo "Perolehan Nilai Akhir Siswa adalah  <b>$hasil</b> <br/> ";
    echo "Grade : $grade <br/>";
}

?>