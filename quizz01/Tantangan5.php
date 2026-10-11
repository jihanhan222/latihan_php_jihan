<?php
$nama = "Jihan";
$kelas = "X";
$jurusan = "Manajemen";
$umur = 23;
$nilai = 88;

echo "================================<br>";
echo "       KARTU PROFIL MAHASISWA<br>";
echo "================================<br>";

printf("Nama Siswa : %s<br>", $nama);
printf("Kelas      : %s<br>", $kelas);
printf("Jurusan    : %s<br>", $jurusan);
printf("Umur       : %d tahun<br>", $umur);
printf("Nilai      : %.2f<br>", $nilai);

if ($nilai >= 75) {
    $status = "LULUS";
} else {
    $status = "TIDAK LULUS";
}

echo "Status     : " . $status . "<br>";
echo "================================<br>";
?>