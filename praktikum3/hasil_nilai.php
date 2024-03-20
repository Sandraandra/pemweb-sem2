<?php


require_once 'model.php';


if( !isset($_POST["submit"])    ){
    header("Location: index.php");
    exit;
}

$proses = $_POST["submit"];
$nama = $_POST["nama_asdos"];
$nilai_kehadiran = $_POST["nilai_kehadiran"];
$hasil_studi = $_POST["hasil_studi"];
$nilai_ips = $_POST["nilai_ips"];
$nilai_ipk = $_POST["nilai_ipk"];
$nilai_keseluruhan = ($hasil_studi + $nilai_ips + $nilai_ipk) / 3;


echo 'Nama asdos : '  . $nama_asdos;
echo '<br> nilai studi : ' . $nilai_kehadiran;
echo '<br> hasil studi : ' . $hasil_studi;
echo '<br> nilai ips : ' . $nilai_ips;
echo '<br> nilai ipk : ' . $nilai_ipk;

echo '<br> Nilai Keseluruhan : ' . $nilai_keseluruhan;
echo '<br> DINYATAKAN : ' . kelulusan($nilai_keseluruhan);
echo '<br> GRADE : ' . grade($nilai_keseluruhan);









?>