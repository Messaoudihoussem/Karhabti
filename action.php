<?php
$CIN = $_POST['T1'];
$Nom = $_POST['T2'];
$prenom = $_POST['T3'];
$adresse = $_POST['T4'];
$email = $_POST['T4'];
$note = $_POST['T5'];


$conn = new mysqli('localhost','root','','webreact');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into contactinfo(cin,nom, prenom, adresse, email, message) values(?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssssi", $CIN, $Nom, $prenom, $adresse, $email, $note);
		$execval = $stmt->execute();
		echo $execval;
		echo "sent successfully...";
		$stmt->close();
		$conn->close();
?>