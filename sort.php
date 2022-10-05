<html>
<head>
	<title>sort</title>
</head>
<body>
    <h1 style="color:blue;">Sorting Numbers</h1>
<?php
      $array=$_POST['list'];
      $arr=explode(" ",$array);
     if($_POST['order']=="Ascending"){
         ascending($arr);
      }
      else if ($_POST['order']=="Descending"){
        descending($arr);
      }
 function ascending($num){
    sort($num);
     print("<p>Numbers in ascending order:</p><p> </p><ol type='1'>");
     for($i=0;$i<count($num);$i++){
        print("<li>".$num[$i]."</li>");
     }
    print("</ol>");
 }
 function descending($num){
    rsort($num);
     print("<p>Numbers in descending order:</p><p> </p><ol type='1'>");
     for($i=0;$i<count($num);$i++){
        print("<li>".$num[$i]."</li>");
     }
    print("</ol>");
 }
?>
</body>
</html>