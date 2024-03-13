<?php
$NilaiSaya = [80,78,72,84,92,88];
echo "Nilai Saya :";
echo implode(", " , $NilaiSaya , );
echo "<br>";

$NilaiMin = min($NilaiSaya);
echo "Nilai Terkecil : ";
echo $NilaiMin;
echo "<br>";

$NilaiMax = max($NilaiSaya);
echo "Nilai Terbesar : ";
echo $NilaiMax;
echo "<br>";

$NilaiUrut1 = sort($NilaiSaya);
echo "Diurutkan Terkecil : ";
echo implode(", " , $NilaiSaya);
echo "<br>";

$NilaiUrut2 = arsort($NilaiSaya);
echo "Diurutkan Terbesar : ";
echo implode(", " , $NilaiSaya);
echo "<br>";

$NilaiRata = array_sum($NilaiSaya)/6;
echo "Rata-rata : ";
echo $NilaiRata;
echo "<br>";

echo "Nilai Sekarang : ";
$NilaiSekarang = arsort($NilaiSaya);
array_splice($NilaiSaya , 5 , 1, 75);
echo implode(", " , $NilaiSaya);
?> 