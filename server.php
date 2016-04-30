<?php
session_start();
$sessionId = session_id();
$ipAddress=$_SERVER['REMOTE_ADDR'];
$bufferStartTime=$_POST['startTime'];
$bufferEndTime=$_POST['endTime'];

bufferingEventLogger($ipAddress,$bufferStartTime,$bufferEndTime,$sessionId);

function bufferingEventLogger($ipAddress,$bufferStartTime,$bufferEndTime,$sessionId){
try{
	
	$conn = mysqli_connect("127.0.0.1", "root", "root", "metrics",3306);	
	$sql = "INSERT INTO BufferingTimes(IpAddress,StartTime,EndTime,SessionId) VALUES ('$ipAddress',$bufferStartTime,$bufferEndTime,'$sessionId');";
	//$sql = "SELECT * FROM BufferingTimes";
	if (mysqli_query($conn, $sql)) {
    		echo "New record created successfully";
	}}
catch(Exception $e){
	echo $e->getMessage();
}
}
$array = array();
$conn = mysqli_connect("127.0.0.1","root","root","metrics",3306);
$sql = "SELECT * FROM BufferingTimes;";
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
?>
