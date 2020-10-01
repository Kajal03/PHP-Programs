<?php

function sortArray($arr){
  for($i=0;$i<count($arr)-1;$i++){
    for($j=0;$j<count($arr)-1-$i;$j++){
        if($arr[$j]>$arr[$j+1]){
          $temp=$arr[$j];
          $arr[$j]=$arr[$j+1];
          $arr[$j+1]=$temp;  
        }
    }
  }

for($x=0;$x<count($arr);$x++)
 echo $arr[$x]." "; 
}

$ar=array(1,5,2,3,9,13,0,123,52,4);
sortArray($ar);

?>
