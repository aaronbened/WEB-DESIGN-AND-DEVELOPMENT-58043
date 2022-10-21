<html>
<head><title>Application of Looping statement</title></head>
<body>
<?php
//lets try 2
echo "displaying integers less than 10 but not less than 3"."<br>";
for($x=1;$x<10;++$x)
{	if($x<=2)
	{
		continue;
	}
	echo" The number is: $x"." <br>";
}
?>
</body>
</html>