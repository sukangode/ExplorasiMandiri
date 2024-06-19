<?php
//file json yang akan dibaca
$file = "anggota.json";

//Mendapatkan file json
$anggota = file_get_contents($file);

//meng-decode anggota json
$data = json_decode($anggota,true);

//membaca data array menggunakan foreach
foreach ($data as $key => $d){
    //hapus data kedua
    if ($d['no'] === 3){
        //menghapus data sesuai index
        //menggantinya  dengan elemen baru
        array_splice($data,$key,2);
    }
}

//Meng-encode data menjadi Json
$jsonfile = json_encode($data, JSON_PRETTY_PRINT);

//Menyimpan data ke dalam anggota Json
$anggota= file_put_contents($file, $jsonfile);