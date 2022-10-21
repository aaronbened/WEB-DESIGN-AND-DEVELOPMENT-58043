<html>
<head><title>Application of Looping statement</title></head>
<body>
<?php
//lets try
echo "displaying hello 0 to hello 10"."<br>";

for($x=0;$x<=10;$x++)
{
	echo"hello $x"." <br>";
}
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