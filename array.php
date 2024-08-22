<?php
$students=array("nasir","naeem","khan","amir");
$students[0]="abdullah";
array_push($students,"naseer","rahim","sultan");
array_pop($students);
array_shift($students);
foreach($students as $student){
    
    echo $student . "<br>";
}
?>