<?php
$Your_Name = $_POST['yourname'];
$last_Name = $_POST['lastname'];
$Email = $_POST['email'];
$Phone = $_POST['phone'];
$subject_of_message = $_POST['subject'];
$message = $_POST['message'];

$mysqli = new mysqli('localhost', 'root', '', 'contact');

if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$stmt = $mysqli->prepare('INSERT INTO contactus(id, YourName, LastName, Email, Phone,Subject,message) VALUES ("",?,?,?,?,?,?)');

$stmt->bind_param('sssiss', $Your_Name, $last_Name, $Email, $Phone, $subject_of_message,$message);

$stmt->execute();
echo "sent successfully...";

$stmt->close();
?>