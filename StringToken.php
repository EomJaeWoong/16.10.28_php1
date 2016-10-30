<?php
@$str = $_GET['str'];

if($str !== null){
	$tok = strtok($str, ".");
	
	while($tok !== false){
		echo "$tok<br/>";
		$tok = strtok(".");
	}
}

else{
	echo "No String Input!";
}
?>