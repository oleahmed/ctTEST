
<?php

function Name($n)
{
	
	if ($n <= 0) {
	}else{
		echo "Hello<br>";
		$n--;
		Name($n);
	}
	
	
}

Name(5);
?>