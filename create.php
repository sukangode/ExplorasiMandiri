<?php
//Data 1
$data[]= array(
    'no' => 1,
    'nama' => 'Rudi',
    'alamat' => 'Nganjuk'
);

//Data 2
$data[]= array(
    'no' => 2,
    'nama' =>'Gilang',
    'alamat' => 'Unsika'
);

//Data 3
$data[]= array(
    'no' => 3,
    'nama' => 'Lukman',
    'alamat' => 'Jakarta'
);

//Meng-encode data menjadi Json
$jsonfile = json_encode($data, JSON_PRETTY_PRINT);

//Menyimpan data ke dalam anggota.Json
file_put_contents('anggota.json',$jsonfile);
