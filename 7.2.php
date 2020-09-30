<?php
function power($base,$n)
{  
	$result=1;
	for($i=0;$i<$n;$i++)
	{
		$result = $result*$base;
	}	
	return $result;
}
$x=power(power($argv[1],$argv[3])+power($argv[2],$argv[4]),$argv[5]);
echo $x ;
