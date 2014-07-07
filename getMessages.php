<?php
include('db.php'); 

$custid = $_GET['customerID'];
$storeid = $_GET['storeID'];

$sqlmsg = "SELECT * FROM messages WHERE SentByID = '$custid' AND ReceivedByID = '$storeid'";

$output = '';
if ($result = $conn->query($sqlmsg)) {
while ($row = $result->fetch_assoc()) {

$output[] = $row;

}
echo json_encode($output);
}

?>