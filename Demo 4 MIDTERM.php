<html>
<head><title>Looping statement</title></head>
<body>
<?php
// while loop
echo "while loop";
$fuel = 10;
while (--$fuel>=0)
	echo "There's enough fuel"."<br>";

	//break;

// do while
echo "do while loop";
$count = 1;
do
	echo "$count times 12 is ".$count*12 . "<br>";
while(++$count<=12);

//for loop
echo "For loop";
for($gas =10;$gas>=1;--$gas)
	echo "There's enough Gas"."<Br>";

//foreach loop
echo "Foreach loop";
$color = array("blue","red","green","yellow");
foreach ($color as $val)
	echo $val."<br>";
//break
echo "Break function";
for($x=1;$x<10;++$x)
{	if($x==4)
	{
		echo" The number is: $x"." <br>";
		break;
	}
}
//continue
echo "Continue function";
for($x=1;$x<10;++$x)
{	if($x==4)
	{
		continue;
	}
	echo" The number is: $x"." <br>";
}
?>
</body>
</html>