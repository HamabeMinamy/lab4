html>
<head>
	<title>sort</title>
</head>
<body>
<?php
    $MPG=$_POST["MPG"];
    $COST=$_POST["Cost"];
    $CITY=$_POST["City"];   
    $all=array("Atlanta"=>"880","Boston"=>"225","Chicago"=>"788","Detroit"=>"614","Miami"=>"1275");
    $fuel=$all[$CITY]/$MPG*$COST;
    print("<h1>Fuel Cost to ".$CITY."from NYC</h1>");
    printf("<p>The distance is %s miles and your fuel cost will be approximately $%.2f.</p>",$all[$CITY],$fuel)
?>
</body>
