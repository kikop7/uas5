<?php
$server = "database";
$username = "root";
$password = "UAS5";
$dbname = "Trucorp";
$link = mysqli_connect($server,$username,$password,$dbname);
if(!$link){
	echo "tidak bisa konek ke MySQL".PHP_EOL;
	exit;
}

$sql = "SELECT * FROM users";
$res = $link->query($sql);
$num = mysqli_num_rows($res);

if($res->num_rows > 0){
	while($row = $res->fetch_assoc()){
		echo $row['ID']."-".$row['Nama']."-".$row['Kantor']."<br>";
	}
}
else{
	echo "no data";
}

echo "Number of user : " .$num. "<br>";

$link->close();
?>
