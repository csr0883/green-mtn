<?php
$value = 'something from somewhere';

setcookie("TestCookie", $value);
setcookie("TestCookie", $value, time()+3600);  /* expire in 1 hour */
setcookie("TestCookie", $value, time()+3600, "/~rasmus/", "example.com", 1);
?>
<!DOCTYPE html>
<html>
<head>
    <title><?php echo "test" ?></title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <style type="text/css">
        h4 {
            margin:5px 0;
        }
        li {
            display:inline-block; 
            padding-right:20px;
            border-bottom:1px solid gray;
        }
    </style>
</head>
<body>



<?php
/*
$dbh=mysql_connect ("localhost", "csr0883_cobra", "90Music09!Desoto") or die ('I cannot connect to the database because: ' . mysql_error());
mysql_select_db ("csr0883_green_mtn_tech");
*/



$servername = "localhost";
$username = "csr0883_cobra";
$password = "90Music09!Desoto";
$dbname =   "csr0883_green_mtn_tech";
$dbtable = "students";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 

//$sql = "SELECT school, sex, age FROM csr0883_green_mtn_tech.students LIMIT 20;";
//$sql="SELECT id, G1 as 'GRADE 1', G2 as 'GRADE 2', G3 as 'GRADE 3', CASE WHEN internet = 1 Then 'YES' Else 'NO' END as 'HAS INTERNET' FROM `students` ORDER BY `id` ASC LIMIT 0, 20";
$sql="SELECT count(id), G3 as 'FINAL GRADE', failures FROM `students` group by failures";
echo $sql."<br>";

$result = $conn->query($sql);
/*$rows = array();

if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<br> school: ". $row["school"]. " - sex: ". $row["sex"]. " age:" . $row["age"] . "<br>";

        //******Print Query Data************************
        //echo "<div> ID: ".$r['id']."</div>";
        //echo "<div> Grade1: ".$r['GRADE 1']."</div>";
        //echo "<div> Grade2: ".$r['GRADE 2']."</div>";
        //echo "<div> Grade3: ".$r['GRADE 1']."</div>";
        //*********************************************
        
     }
} else {
     echo "0 results";
}*/

$rows = array();
$columns = array();
$result = mysqli_query ($conn, $sql);
while($r = mysqli_fetch_assoc($result)) {    
    
    /*Build JSON Object from Query*/
    $rows[] = $r;
    
}
$conn->close();

print json_encode($rows);




//*********KEEP THIS IT WORKS!!!**************************

/*$json = array();
$result = mysqli_query ($conn, $sql);
while($row = mysqli_fetch_array ($result))     
{
    //$students = array(
    //    'school' => $row['school'],
    //    'sex' => $row['sex'],
    //    'age' => $row['age']
    //);
    //array_push($json, $students);
     $emparray[] = $row;
}

$jsonstring = json_encode($emparray);
//echo $emparray."<br>";
echo $jsonstring;*/
//*********KEEP THIS IT WORKS!!!**************************




/*// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT school, sex, age FROM csr0883_green_mtn_tech LIMIT 5;";
echo $sql."<br>";

$result = $conn->query($sql);

$rows = array();
   while($r = mysql_fetch_assoc($result)) {
     $rows['object_name'][] = $r;
   }

echo json_encode($rows);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->mysql_fetch_assoc()) {
        echo "school: " . $row["school"]. " - sex: " . $row["sex"]. " age: " . $row["age"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();*/

?>

<script type="text/javascript">
    var jsonObject = <?echo json_encode($rows) ?>;
    //$('#output').text(jsonObject.school);
     $(document).ready(function() {


        $.each(jsonObject, function(key, value){
            $("#output").append("<h4>Student "+[key]+"</h4>");
            $.each(value, function(key, value){
                $("#output").append("<li>"+key+":"+value+"</li>");
            });
        });

        $.each(jsonObject, function(key, value){
            $.each(value, function(key, value){
                $("#output").append("<div>"+key+"</div>");
            });
            return false;
        });
    });
</script>

<div id="headers"></div>
<div id="output"></div>





</body>
</html>