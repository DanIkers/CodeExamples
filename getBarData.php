<?php

include('db.php');
$theStoreID = $_GET['storeID'];
$theType = $_GET['type'];
$thePID = $_GET['pid'];
$resultData = "SELECT * FROM store_options WHERE StoreID = '$theStoreID' AND Type = '$theType' AND PID = '$thePID' AND isProduct = '1' ORDER BY Devide ASC;";
$output = [];
if($result = $conn->query($resultData)) {
while ($row = $result->fetch_assoc()) 
{
$output[] = $row;
}
$theData = [];

foreach($output as $d) {

$devide = explode('-', $d['Devide']);
$monthName = date("F", mktime(0, 0, 0, $devide[1], 10));
$theDevide[] = $monthName;
$theValue[] = $d['Data'];
}
$theData[] = $theDevide;
$theData[] = $theValue;
$theData[] = $output[0]['pname'];

echo json_encode($theData);
}

?>