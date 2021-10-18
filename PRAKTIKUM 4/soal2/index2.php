<head>
<meta name="author" content="Rezon handry Gunawan 2172004">
</head>
<html>
<body>
    <table align= center border = 1> 
            <tr><td colspan= 2 align= center >Kalkulator</td></tr>
            <tr>
                <td>ANGKA PERTAMA</td>
                <?php
                    echo"<td>$_GET[A1]";
                ?>
            </tr>
            <tr>
                <td>ANGKA KEDUA</td>
                <?php
                    echo"<td>$_GET[A2]";
                ?>
            </tr>
            <tr>
                <td>ANGKA OPERATOR</td>
                <?php
                    echo"<td>$_GET[O]";
                ?>
            </tr>
            <tr>
                <td>HASIL :</td>
                <td>
                <?php
                    $A1 = $_GET["A1"];
                    $A2 = $_GET["A2"];
                    $O = $_GET["O"];
                    if ($O ="+")
                    {echo $A1+$A2;}
                    elseif ($O ="-")
                    {echo $A1-$A2;}
                    elseif ($O ="*")
                    {echo $A1*$A2;}
                    elseif ($O ="/")
                    {echo $A1/$A2;}
                ?>
                </td>
                
    </table>
</body>
</html>
