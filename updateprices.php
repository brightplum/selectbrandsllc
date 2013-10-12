<?php

#Update Prices Form
#http://selectbrandsllc.com
#Fredric Mitchell
#08.16.07

#open file
$i=0;
$filename = @fopen("prices.txt", "r");
	
if($_POST)	{
	for($i=0;$i<4;$i++)	{
		$newprices[$i] = $_POST['price' . $i];
		echo $newprices[$i] . "\n";
	}
	foreach ($newprices as $value)	{
		$newvalue .= $value . "\n";
	}
	if(is_writable($filename))	{
		fwrite($filename, $newvalue);
		echo "File Updated!\n";
		fclose($filename);
		exit;
	}
	else	{ echo "File is not writable!\n"; }
	echo $i . "\n";
}

if ($filename) {	
    while (!feof($filename)) {
        $prices[$i] = fgets($filename, 4096);
        $i++;
    }
    fclose($filename);
}
$numlines = count( $prices );

?>

<html>
<head>
	<title>Update Prices</title>
</head>
<body>
	<form action="<?php echo $PHP_SELF ?>" method="post">
		<table>
		    <tr>
<?
	for($i=0; $i<$numlines; $i++)	{
		$j=$i+1;
		echo "<td>Price " . $j . ": <input name='price" . $i . "' type='text' id='price" . $i . "' value='" . $prices[$i] . "' size='4'></td>";
	}
?>
			</tr>
			<tr colspan="4">
			  <td><input type="submit" name="Submit" value="Submit"></td>
			</tr>
		</table>
	</form>
</body>
</html>
