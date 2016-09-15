<?php


   $age = 5;
   if ($age <18)  { 
	   
     //true - on väiksem kui 18 
     echo "alaealine";
  
   } else { 
//muul juhul
echo "täisealine";
   }
  


?>

<br>

<?php

for ($i = 1; $i <= $age; $i = $i + 1)  { 
echo $i." korda ";


}
echo " vana "



?>

<br>

<?php


echo date("d.m.Y");


?>


<br>


<?php

echo ("Day of the year - ");
echo date (" z")

?>


<?php







?>
