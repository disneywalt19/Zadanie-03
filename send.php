<!DOCTYPE HTML>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>ZADANIE 03</title>
    </head>
<body>
<?php
  $number = $_GET['podaj'];
    echo'<table border=3>';

    for ($i=1; $i<=$number; $i++)
	{
		       echo'<tr>';
	for ($j=1; $j<=$number; $j++)
	    	{
			  
		echo '<td style="background-color:'.(($i==$j)?'green':'yellow').'" >'.($i*$j).'</td>';
	 	}		   


echo'</tr>';

	}

echo'</table>';
?>
</body>
</html>

