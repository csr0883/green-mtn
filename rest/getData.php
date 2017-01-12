<? include '../includes/functions.php'; ?>
<?
$queryReuest=$_POST["id"];
switch ($queryReuest) {
case "internetPie":
   	 $pieQuery = getQuery('getInternetPie',true);
   	 echo json_encode($pieQuery);
   	 break;

case "internetBar"://Construct Data Objects
   	 $barQuery = getQuery('getInternetBar',true);
   	 echo json_encode($barQuery);
	break;

case "failurePie":
	$pieQuery = getQuery('getFailurePie',true);
	echo json_encode($pieQuery);
	break;

case "failureBar":
   	$barQuery = getQuery('getFailureBar',true);
   	echo json_encode($barQuery);
    break;

case "studyPie":
	$pieQuery = getQuery('getStudyPie',true);
	echo json_encode($pieQuery);
	break;
case "studyBar":
   	$barQuery = getQuery('getStudyBar',true);
   	echo json_encode($barQuery);
    break;

case "absencePie":
	$pieQuery = getQuery('getAbsencePie',true);
	echo json_encode($pieQuery);
	break;

case "absenceBar":
   	$barQuery = getQuery('getAbsenceBar',true);
   	echo json_encode($barQuery);
    break;

case "healthPie":
	$pieQuery = getQuery('getHealthPie',true);
	echo json_encode($pieQuery);
	break;
case "healthBar":	
   	$barQuery = getQuery('getHealthBar',true);
   	echo json_encode($barQuery);
    break;

case "travePie":
	$pieQuery = getQuery('getTravelPie',true);
	echo json_encode($pieQuery);
	break;
case "travelBar":
   	$barQuery = getQuery('getTravelBar',true);
   	echo json_encode($barQuery);    
    break;
}

?>