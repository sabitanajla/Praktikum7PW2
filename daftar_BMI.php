<?php require_once 'hitung_BMI.php'; 
$array = [
    [
        "nama" => "Aurora",
        "jk" => "Perempuan",
        "umur" => 20,
        "bb" => 46,
        "tb" => 155,
        "bmi" => "18.5",
        "ket" => "Normal (ideal)"
    ],
    [
        "nama" => "Siti Aisyah",
        "jk" => "Perempuan",
        "umur" => 21,
        "bb" => 50,
        "tb" => 160,
        "bmi" => "19.5",
        "ket" => "Normal (ideal)"
    ],
    [
        "nama" => "Syafiq Khalid",
        "jk" => "Laki-laki",
        "umur" => 22,
        "bb" => 60,
        "tb" => 165,
        "bmi" => "21.8",
        "ket" => "Normal (ideal)"
    ]
    ];

    $data = [
        "nama" => $_POST['nama'],
        "jk" => $_POST['jk'],
        "umur" => $_POST['umur'],
        "bb" => $_POST['bb'],
        "tb" => $_POST['tb'],
        "bmi" => $hasil->HasilBMI(),
        "ket" => $hasil->hitungBMI()
    ];
    array_push($array, $data);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Form Data Pasien</title>
</head>
    <div class= "container">
    <hr><h2 style="text-align: center; margin-top: 15px;">Hasil Data Pasien</h2><hr>
<body>
<hr>
<table class="table table-bordered">
    <tr class="table-primary text-center text-uppercase">
        <th>No</th>
        <th>Nama Lengkap</th>
        <th>Umur</th>
        <th>Jenis Kelamin</th>
        <th>Berat badan</th>
        <th>Tinggi Badan</th>
        <th>BMI</th>
        <th>Keterangan</th>
    </tr>

<?php 
    $number = 1 ;
    foreach ($array as $bmi){
?>

<tr class="table-warning text-center">
                <td><?=$number ?></td>
                <td><?=$bmi['nama'] ?></td>
                <td><?=$bmi['umur']?></td>
                <td><?=$bmi['jk']?></td>
                <td><?=$bmi['bb']?></td>
                <td><?=$bmi['tb']?></td>
                <td><?=$bmi['bmi']?></td>
                <td><?=$bmi['ket']?></td>          
            </tr>
            <?php 
                $number ++; 
            } ?>
    </table>
    </div>
</body>
</html>