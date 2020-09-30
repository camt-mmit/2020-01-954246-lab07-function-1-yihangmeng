<?php
function calculate($i)
{  
	$f=$i*9/5+32;	
	return $f;
}
echo "Celsius Fahrenhrit\n";
for($i=$argv[1];$i<=$argv[2];$i++)
{
	
	echo $i."   ".calculate($i)."\n";
}
