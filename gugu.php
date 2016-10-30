<?php
@$a = $_GET['num'];

if($a > 0){
	for($i=1; $i < 10; $i++)
	{
		echo $a." * ".$i." = ".$i * $a;
		echo "<br/>";
	}
}

else{
	echo "No Num Input!";
}
?>