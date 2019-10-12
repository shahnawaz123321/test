<?php 
$db = 'test';
$username = 'root';
$password = '';
$servername = 'localhost';

$conn = mysqli_connect($servername, $username, $password,$db);
$sql = "SELECT * FROM user";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()){
	echo "<pre>"; print_r($row);
}


die;
$r = 1;

/*for ($i=1; $i <= 10; $i++) { 
	echo $i; echo "<br>";
}*/
$i = 11;
/*while ($i <= 10) {
	echo $i; echo "<br>";
	$i++;
}*/
/*do{
	echo $i; echo "<br>";
	$i++;
}
while($i >= 10)*/

if($i<=10){
	echo "if";
}else{
	echo "else";
}

// loop

// initialization
// condition
// increament/decrement






?>