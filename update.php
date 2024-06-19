<?php
//file json yang akan dibaca
$file = "anggota.json";

//Mendapatkan file json
$anggota = file_get_contents($file);

//meng-encode anggota json
$data = json_decode($anggota,true);

//membaca data array menggunakan foreeach
foreach($data as $key => $d){
    //perbaharui data kedua
    if ($d['no']===1){
        $data[$key]['alamat'] = 'jakarta';
    }
}

//Meng-encode data menjadi Json
$jsonfile = json_encode($data, JSON_PRETTY_PRINT);

//Menyimpan data ke dalam anggota.Json
$anggota= file_put_contents($file, $jsonfile);