<?php
header("Access-Control-Allow-Origin: *");

$servername="localhost";
$user = "root";
$password="richgirl23!!";
$dbname="chatapp";
$connect = mysqli_connect($servername, $user, $password, $dbname);

if($connect) {
	$result = mysqli_query($connect , "select * from users");
	$dbdata = array();
	while ($row = $result->fetch_assoc()) {
		$dbdata[] = $row;
	//	echo $row['id'];
	}

	echo json_encode($dbdata);

}
/*
echo '접속완료';
} else {
	'접속실패';
}
*/

?>
