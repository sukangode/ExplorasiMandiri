<?php
// Tangkap variabel dari form
$vta = $_POST["ttugas"];
$vtb = $_POST["tuts"];
$vtc = $_POST["tuas"];
$vtd = ($vta * 0.2) + ($vtb * 0.3) +($vtc * 0.5);

//Tampilkan datanya
echo " Nilai Tugas       : $vta <br>";
echo "Nilai UTS       : $vtb <br>";
echo "Nilai UAS     : $vtc <br>";
echo "Total NILAI      : $vtd <br>";

if ($vtd >= 90)
echo "Anda Mendapatkan Nilai A";
elseif ($vtd >= 80 )
echo "Anda Mendapatkan Nilai B";
elseif ($vtd >= 60 )
echo "Anda Mendapatkan Nilai c";
else
echo "Anda Mendapatkan Nilai D";


// File json yang akan dibaca
$file = "krs2.json";

// Mendapatkan file json
$anggota = file_get_contents($file);

// Mendecode anggota.json
$data = json_decode($anggota, true);

// Data array baru
$data[] = array (

'tugas' => "$vta",
'uts' => "$vtb",
'uas' => "$vtc",
'nilai' => "$vtd",

);

$konten = json_encode($data, JSON_PRETTY_PRINT);

//menyimpan konten di file
file_put_contents($file, $konten);

//menampilkan data

foreach ($data as $key => $value)
{
  
echo "Tugas :" .$value['tugas']. '<br>';
echo "UTS :" .$value['uts']. '<br>';
echo "UAS :" .$value['uas']. '<br>';
echo "Nilai :" .$value['nilai']. '<br>';


echo"<hr>";

}
?>