<!DOCTYPE html>
<html>
<body>

<?php
$sub=array("EM","DSGT","OS","Python","JAVA"); 
echo ("<pre>");
print_r($sub);
// echo "4th Sem Sub Are :-" . $sub[0] . ", " . $sub[1] . " ," . $sub[2] . "," . $sub[3]. "," . $sub[4] ."<br>"; 
print_r(array_count_values($sub));
array_pop($sub);
print_r($sub);
array_push($sub,"PSNA","DBMS");
var_dump($sub);
?>

</body>
</html>