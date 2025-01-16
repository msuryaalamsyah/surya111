<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
   
    define('gaji', 5000000);
    define('bonus', 500000);
    define('pajak', 0.12);
    $proyek = 2;

    //menghitung bonus
    $proyek *= bonus; // = $proyek = $proyek * $bonus

    //menghitung gaji+bonus
    $total_gaji = gaji + $proyek;

    //menghitung total pajak 
    $total_pajak = $total_gaji * pajak;
    
    //gaji bersih
    $gaji_bersih = $total_gaji - $total_pajak;







    echo "ini bonus kamu $proyek <br/>";
    echo "ini gaji kamu sehabis ditambah bonus $total_gaji <br/>";
    echo "ini pajak kamu $total_pajak <br/>";
    echo "ini gaji bersih kamu $gaji_bersih"
    
   ?>
</body>
</html>