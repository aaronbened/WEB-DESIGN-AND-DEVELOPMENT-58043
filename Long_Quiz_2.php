<html>
<title>QUIZ FOR MIDTERM</title>
<body>
<?php
/*
salary rate = 600/day
salary = salary rate *15 days
taxable amount = 30% of salary
net pay = salary - taxable amount 
*/


echo "Number 1" . "<br><br>" ;
$day = 15;
$salary_rate = 600;
$salary = $salary_rate * $day;
$taxable_amount = 0.3 * $salary;
$net_pay = $salary - $taxable_amount;
echo "Day = ". $day . "<br>";
echo "Salary rate = ". $salary_rate . "<br>";
echo "Salary = ". $salary. "<br>";
echo "Taxable Amount = ". $taxable_amount . "<br>";
echo "Net Pay = ". $net_pay . "<br>"."<br>";
$int = 1;


//PHP program that will add all positive integers from 1-50 using loop statement


echo "Number 2" . "<br><br>";
$sum = 0;
for($x=1; $x<=50; $x++)
{
$show= $sum +=$x;
echo "$x = "  .$show. "<br>";
}
echo "The sum of the numbers 1 to 50 is $sum"."\n";
?>
</body>
</html>