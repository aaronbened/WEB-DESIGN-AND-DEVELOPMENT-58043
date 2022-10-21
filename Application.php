<html>
<head><title>Application of Looping statement</title></head>
<body>
<?php
//lets try
echo "displaying hello 0 to hello 10";
for($x=0;$x<=10;$x++)
{
	if($x<=4)
	echo" hello $x"." <br>";
}
//lets try 2
echo "displaying integers less than 10 but not less than 3";
for($x=1;$x<10;++$x)
{	if($x<=4)
	{
		continue;
	}
	echo" The number is: $x"." <br>";
}
?>
</body>
</html>