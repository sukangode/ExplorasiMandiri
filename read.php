<?php
//file json yang akan dibaca(full path file)
$file = "anggota.json";

//Mendapatkan file json
$anggota = file_get_contents($file);

//meng-encode anggota json
$data = json_decode($anggota,true);

//membaca data array menggunakan foreeach
foreach($data as $d){
    echo "No:". $d['no']. "<br>";
    echo "Nama:". $d['nama']. "<br>";
    echo "Alamat:". $d['alamat']. "<br>";
}