<?php 
$array = array();
$conn = mysqli_connect("127.0.0.1","root","root","metrics",3306);
$sql = "SELECT * FROM BufferingTimes;";
$result  = mysqli_query($conn,$sql);
while($row = mysqli_fetch_array ($result))
{
    $metric = array(
        'IpAddress' => $row['IpAddress'],
        'StartTime' => $row['StartTime'],
        'EndTime' => $row['EndTime'],
		'SessionId'=> $row['SessionId']
    );
    array_push($array, $metric);
}

$jsonstring = json_encode($array);
echo $jsonstring;
?>
