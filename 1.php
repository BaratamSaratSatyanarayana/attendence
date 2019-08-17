<?php
$flag=0;
$name=$_POST['attendence'];
for($i=1;$i<=60;$i++)
{
	if($i==23 || $i==30)
		continue;
	if($name[$i] == "no")
	{
	
	
	echo $i;
	echo "<br>";
	$flag=1;
	
	
	 }
	 
	 
}
if($flag==0)
	 {
		 echo "No Absents";
	 }
?>




