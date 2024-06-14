<?php

$buku = [
    [
        "judul" => "Akuntansi Pengantar 1",
        "pengarang" => "Supardi",
        "penerbit" => "Gava Media",
        "terbit" => "2009"
    ],
    [
        "judul" => "Aplikasi Klinis Induk Ovulasi & Stimulasi Ovariu",
        "pengarang" => "Samsulhadi",
        "penerbit" => "Sagung Seto",
        "terbit" => "2013"
    ],
    [
        "judul" => "Aplikasi Praktis Asuhan Keperawatan Keluarga",
        "pengarang" => "Komang Ayu Heni",
        "penerbit" => "Sagung Seto",
        "terbit" => "2012"
    ],
    [
        "judul" => "A-Z Psikologi : Berbagai kumpulan topik Psikologi",
        "pengarang" => "Nasruddin Anshoriy",
        "penerbit" => "LKiS",
        "terbit" => "2008"
    ],
    [
        "judul" => "Biografi Gus Dur ; The Authorized Biography of KH. Abdurrahman Wahid (Soft Cover)",
        "pengarang" => "Greg Barton",
        "penerbit" => "LKiS",
        "terbit" => "2011"
    ],
    [
        "judul" => "Buku Ajar Tumbuh Kembang Remaja & Permasalahanya",
        "pengarang" => "Soetjiningsih",
        "penerbit" => "Sagung Seto",
        "terbit" => "2005"
    ]
]


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan php day2</title>
</head>
<style>
    *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }
    body{
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        background-image: url('./bg.png');
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        width: 100%;
    }
    .box{
        border-radius: 8px;
        margin: 10px;
        height: auto;
        backdrop-filter: blur(30px);
        background: transparent;
        width: auto;
        display: flex;
        flex-direction: column;
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        padding: 30px;
    }

    a{
        color: white;
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;

    }
    h1{
        color: white;
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif
    }
</style>
<body>
    <h1>Pilih Data Buku</h1>
    <div class="box">
        <?php foreach ($buku as $book) : ?>
           <div>
               <a href="latihanPHP2.php?judul=<?= $book ["judul"] ?>&pengarang= <?= $book ["pengarang"] ?>&penerbit= <?= $book ["penerbit"] ?>&terbit= <?= $book ["terbit"] ?>"><?= $book["judul"];?></a>
            </div>
            
        <?php endforeach ;?> 
    </div>
</body>
</html>
