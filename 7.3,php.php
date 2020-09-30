<?php
function calculate($c)
{  
	$f=($c*9/5)+32;	
	return $f;
}
$file = file_get_contents($argv[1]);
$line = explode("\r\n",$file);
$n = $line[0]; 
for($i=1;$i<=$n;$i++)
{ 
	echo "\t".$line[$i]."\t".calculate($line[$i])."\n";
}
