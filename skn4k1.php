<?php 
$hari = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"];
$tanggal = array("1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", 
"12", "13", "14", "15", "16", "17", "18", "19", "20", "21", "22", "23", "24",
 "25", "26", "27", "28", "29", "30", "31");
$bulan = ["Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul", "Ags", "Sep", "Okt", "Nov", "Des"];
$tahun = ["2024", "2025", "2026"];

echo $hari[1].", ".$tanggal[9]." - ".$bulan[2]." - ".$tahun[1];
echo "<br>";

echo $hari[1]. ", " .$tanggal[17]. " - " .$bulan[2]. " - " .$tahun[1];
echo "<hr>";

for ($i = 10; $i <= 30; $i++ ) {
    echo $i;
    echo "<br>";
}
echo "<hr>";
for ($i = 30; $i >= 10; $i-- ) {
    echo $i;
    echo "<br>";
}
echo "<hr>";
$jml_hari = count($hari);
for ($h = 0; $h < $jml_hari; $h++ ) {
    echo $hari [$h];
    echo "<br>";
}
echo "<hr>";
foreach ($tanggal as $tgl) {
    echo $tgl;
    echo "<br>";
}
echo "<hr>";
$b = 0;
$jml_bulan = count($bulan);
while ($b < $jml_bulan) {
    echo $bulan[$b];
    echo "<br>";
    $b++;
}
echo "<hr>";
$t = 0;
$jml_tahun = count($tahun);
do{
    echo $tahun[$t];
    echo "<br>";
    $t++;
} while($t < $jml_tahun);
echo "<hr>";
