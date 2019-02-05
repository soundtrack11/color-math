<!DOCTYPE html>
<html>
<head>
	<title>test</title>
</head>
<body>
<?php  

// making random color for background
function random_color_part() {
    return str_pad( dechex( mt_rand( 0, 255 ) ), 2, '0', STR_PAD_LEFT);
}

function random_color() {
    return random_color_part() . random_color_part() . random_color_part();
}


// making table
echo "<table border = '1'>\n"; 
$i = 1;
while ($i <= 9) {
	echo "\t<tr>";
	$j = 1;
	while ($j <= 9) {
		echo "\t\t<td style=\"background-color:#".random_color()."\">". $i * $j . "</td>\n";
		$j++;
	}
	echo "\t</tr>\n";
	$i++;
}
echo "</table>";




</body>
</html>
