<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HASIL PERHITUNGAN</title>
    <style>
        body{
            background-color:yellow;
            color:black;
            padding: 10% 40%;

        }
        fieldset{
            width: 250px; /* lebar */
			border-color: red; /* warna garis tepi */
			box-shadow: 2px 2px 4px #333; /* bayangan */
            text-align:center;
            background-color:blue;
            color:white;
        }
    </style>
</head>
<body>
    <pre>
    <?php

        //rumus untuk balok
        if(isset($_POST['balok'])){
            $panjang = $_POST['panjang'];
            $lebar = $_POST['lebar'];
            $tinggi = $_POST['tinggi'];
            $hasil_balok = $panjang*$lebar*$tinggi;
            echo "HASIL PERHITUNGAN VOLUME BALOK MU";
            echo "<br>";
            echo "<br>";
            echo "<fieldset>";
            echo "$hasil_balok";
            echo "</fieldset>";
        };
    
        //rumus untuk kubus
        if(isset($_POST['kubus'])){
            $sisi = $_POST['sisi'];
            $hasil_kubus = $sisi*$sisi*$sisi;
            echo "HASIL PERHITUNGAN VOLUME KUBUS MU ";
            echo "<br>";
            echo "<br>";
            echo "<fieldset>";
            echo "$hasil_kubus";
            echo "</fieldset>";
        };
    ?>

                            <a href=menu.php><input type=button value= kembali ></a>
</pre>
</body>
</html>