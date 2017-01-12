<?
function getQuery($query, $returnJSON){
	$servername = "localhost";
	$username = "";
	$password = "";
	$dbname =   "";
	$dbtable = "";

	switch ($query) {
    case "internet":
        $sql="CALL get_internet();";
        break;
    case "failures":
        $sql="CALL get_failures();";
        break;
    case "studytime":
        $sql="CALL get_studytime();";
        break;
    case "absences":
        $sql="CALL get_absences();";
        break;
    case "traveltime":
    	$sql="CALL get_traveltime();";
    	break;
	case "overallhealth":
		$sql="CALL get_health();";
		break;
	case "getInternetPie":
		$sql="CALL get_internetPie();";
		break;
	case "getInternetBar":
		$sql="CALL get_internetBar();";
		break;
	case "getFailurePie":
		$sql="CALL get_failurePie();";
		break;
	case "getFailureBar":
		$sql="CALL get_failurebar();";
		break;
	case "getStudyPie":
		$sql="CALL get_studyPie();";
		break;
	case "getStudyBar":
		$sql="CALL get_studyBar();";
		break;
	case "getTravelPie":
		$sql="CALL get_travelPie();";
		break;
	case "getTravelBar":
		$sql="CALL get_travelBar();";
		break;
	case "getHealthPie":
		$sql="CALL get_healthBar();";
		break;

    default:
	}

	
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
    	die("Connection failed: " . $conn->connect_error);
	} 

	$rows = array();
	$pieResults = array();
	$barResults = array();
	$columns = array();

	//ADD SQL INJECTION CHECK

	$result = mysqli_query ($conn, $sql);
	while($r = mysqli_fetch_assoc($result)) {    
	    
	    /*Build JSON Object from Query*/
	    $rows[] = $r;
	   /* switch ($query) {
	    case "internet":
			$pieResults=$r['']
	        break;
	    case "failures":
	        $sql="SELECT id, G1 as 'GRADE 1', G2 as 'GRADE 2', G3 as 'GRADE 3', failures FROM `students` ORDER BY `id` ASC";
	        break;
	    case "studytime":
	        echo "studytime";
	        break;
	    case "absences":
	        echo "absences";
	        break;
	    default:*/
	    
	}

	$conn->close();

	if($returnJSON == true){
		$dataReturn=json_encode($rows);
	} else {
		$dataReturn=$rows;
	}

	return $rows;
}
	
?>