<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style type= text/css >
    h1{
        color:white;
        text-align:center;
    }

    input[type=button] {
            background-color: orange;
            border-radius:20%;
            border-color:white;
            color: white;
            padding: 15px 10px;
            margin: 10px 15px;
            cursor: pointer;
        align-self:center;}

    fieldset{

            width: 50%; /* lebar */
			border-color: red; /* warna garis tepi */
			box-shadow: 2px 2px 4px #333; /* bayangan */
            text-align:center;
    }
    body{
        padding-top:15%;
        padding-left:35%;
    }
        
    </style>
    <title>Pengiriman Data melalui GET</title>
</head>
<body >
    <fieldset style=text-align:center;background-color:blue>
    <h1>PROGAM HITUNG VOLUME BANGUN RUANG</h1>
    <a href="hitung.php?pilih=1"><input type="button" value="kubus"></a>
    <a href = "hitung.php?pilih=2"><input type="button" value="balok"></a>
    </fieldset>

</body>
</html>