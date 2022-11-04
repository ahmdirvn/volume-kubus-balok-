<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pengiriman data melalui get </title>
    <style type="text/css">
        body{
            background-color:yellow;
            color:white;
            padding:10% 35%;
        }
        fieldset{
            width: 250px; /* lebar */
			border-color: red; /* warna garis tepi */
			box-shadow: 2px 2px 4px #333; /* bayangan */
            text-align:center;
            background-color:blue;
        }
    </style>
</head>
<body >
    <fieldset>
    <?php
    $menu = $_GET['pilih'];
    if($menu=='1')
    {
            ?>
                        <pre>
                            <h2> MASUKAN NILAI SISI KUBUS </h2>
                                <form method="POST" action="hasil.php">
        SISI KUBUS         = <input name="sisi" type = "text"><br>
                                    
                            <input type="submit" name="kubus" value="hitung"> <input type="reset" name="kubus" value="reset"> <a href=menu.php><input type=button value= kembali ></a>
                                </form>
                        </pre>             
            <?php
    }

    elseif($menu=='2')
    {
            ?>
                        <pre>
                        <h2> MASUKAN NILAI SISI BALOK </h2>
                            <form method="POST" action="hasil.php">
        PANJANG         = <input name="panjang" type = "text"> <br>
        LEBAR           = <input name="lebar" type = "text"> <br>
        TINGGI          = <input name="tinggi" type = "text"> <br>
                        <input type="submit" name="balok" value="hitung"> <input type="reset" name="kubus" value="reset"> <a href=menu.php><input type=button value= kembali ></a>
                            </form>
                        </pre>
            <?php  
    }
?>
    </fieldset>

</body>
</html>