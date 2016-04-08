<?php
$memoBasicInfo[0]["area_code"]="-Area Code-";
$memoBasicInfo[0]["area_name"]="-Area Name-";
$memoBasicInfo[0]["distributor_name"]="-Distributor Name-";	
?>
@for($i=0;$i<$len;$i++)
<?php
	$memoBasicInfo[$i+1]["area_code"]=$memoInfos[$i]->AreaCode;
	$memoBasicInfo[$i+1]["area_name"]=$memoInfos[$i]->AreaName;
	$memoBasicInfo[$i+1]["distributor_name"]=$memoInfos[$i]->DistributorName;
?>
@endfor
<?php
$data['memoBasicInfo'] = $memoBasicInfo;
echo json_encode($data);
?>