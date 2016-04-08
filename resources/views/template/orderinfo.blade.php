<?php

if($fTime !="")
    echo "DATE : " . $fTime . "<br>";

if ($tTime != "")
    echo "DATE : " . $tTime . "<br>";


if ($EmployeeId != '') {
    echo "Employee ID: " . $EmployeeId. "<br>";
}
if ($Product != '') {
    echo "Product Name: " . $Product . "<br>";
}

if ($AreaCode != '') {
    echo "Area Code: " . $AreaCode . "<br>";
}

?>

@include (DIR_TEMPLATE.'/orderinfoBody');
