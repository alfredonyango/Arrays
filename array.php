<html>
<body>
 
 
 <?php
 
 $numbers = array(4,8,15,16,23,42);
 echo $numbers[1];
 $mixed=array(9, "fox","dog",array("x","y","Z"));
 echo "</br>".$mixed[2]."</br>";
 //echo $mixed[3];
 ?>
 <pre>
 <?php
 
 echo print_r($mixed);
 ?>
 </pre>
 <?php
 
 /*$mixed[2]="cat";
 $mixed[4]="mouse";
 $mixed[]="horse";
 */
 echo $mixed[3][0];
 ?>
 </body>
 </html>
