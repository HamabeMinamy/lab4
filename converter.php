<html>
<head>
<title>Wage Report</title>
<link rel="stylesheet" type="text/css" href="temperature-conversion.css" >
</head>
<body>
<h1 style="color:red;">Temperature Conversions</h1>
<?php
$start = $_POST['start'];
$end = $_POST['end'];
$increment= $_POST['increment'];
print("<table class='result'><tr><th >Degrees Celsius</th><th>Degrees Fahrenheit</th></tr>");
while($start<=$end){
 print("<tr><td>".$start."</td><td>".($start*1.8+32)."</td><tr>");
 $start=$start+$increment;  
};
print("</table>")
?>
</body>
</html>