<?php
$nama_siswa = "Dimss";
$kelas = "XII PPLG 3";
$nilai_tugas = 85;
$nilai_uts = 80;
$nilai_uas = 2;
$nilai_akhir = $nilai_tugas * 0.3 + $nilai_uts * 0.3 + $nilai_uas * 0.4;

if($nilai_akhir >= 90){
    $predikat = "A";
}elseif($nilai_akhir >= 80){
    $predikat = "B";
}elseif($nilai_akhir >= 75){
    $predikat = "C";
}elseif($nilai_akhir >= 60){
    $predikat = "D";
}else{
    $predikat = "E";
}

if($nilai_akhir >= 75){
    $status = "LULUS";
}else{
    $status = "TIDAK LULUS";
}

?>

<h1>Hasil Penilaian Siswa</h1>
<p>nama: <?php echo $nama_siswa ?></p>
<p>Kelas: <?php echo $kelas ?></p>
<hr>
<p>Nilai Tugas: <?php echo $nilai_tugas ?></p>
<p>Nilai UTS: <?php echo $nilai_uts ?></p>
<p>Nilai UAS: <?php echo $nilai_uas ?></p>
<hr>
<p>Nilai Akhir: <?php echo $nilai_akhir ?></p>
<p>Predikat: <?php echo $predikat ?></p>
<p>Status: <?php echo $status ?></p>
