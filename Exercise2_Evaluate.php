<html>
<Title>Exercise</Title>
<body>
<h1 align= "center"> Evaluation of Grades</h1>
<br><br>
<?php
$CS = $_GET['CS'];
$FE = $_GET['FE'];
$Sum = $CS + $FE;
echo "The Equivalent Grade is :", $Sum ."<br>" ;
if($Sum>=70)
	{
		echo "The Student PASSED"."<br>";
	}
Elseif($Sum<=69)
	{
		echo "The Student REMIDIAL"."<br>";
	}
Elseif($Sum<=60)
	{
		echo "The Student FAILED"."<br>";
	}
Else
	{
		echo "You Entered Wrong Data"."<br>";
	}
?>
</Body>
</html>