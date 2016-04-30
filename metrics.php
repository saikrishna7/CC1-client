<?php
$ipAddress=$_SERVER['REMOTE_ADDR'];

function fetchReadings($ipAddress){
// try{
	
// 	$conn = mysqli_connect("127.0.0.1", "root", "root", "metrics",3306);	
// 	$sql = "SELECT *FROM BufferingTimes where IpAddress='$ipAddress';";
// 	if (mysqli_query($conn, $sql)) {
//     		echo "fetching details successfully";
// 	}}
// catch(Exception $e){
// 	echo $e->getMessage();
// }
// }
$array = array();
$conn = mysqli_connect("127.0.0.1","root","root","metrics",3306);
$sql = "SELECT * FROM BufferingTimes where IpAddress='$ipAddress';";
$result  = mysqli_query($conn,$sql);
while($row = mysqli_fetch_array ($result))     
{
    $metric = array(
        'IpAddress' => $row['IpAddress'],
        'StartTime' => $row['StartTime'],
        'EndTime' => $row['EndTime']
    );
    array_push($array, $metric);
}

$jsonstring = json_encode($array);
echo $jsonstring;
return $jsonstring;
?>