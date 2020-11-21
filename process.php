<?php
$conn=mysqli_connect("localhost", "root", "120116");
mysqli_select_db($conn,"opentutorials3");
$name=mysqli_real_escape_string($conn,$_POST['name']);
$number=mysqli_real_escape_string($conn,$_POST['number']);
$guest=mysqli_real_escape_string($conn,$_POST['guest']);
$date=mysqli_real_escape_string($conn,$_POST['date']);
$comment=mysqli_real_escape_string($conn,$_POST['comment']);
$sql = "INSERT INTO `reservation`
(`name`,`number`, `guest`, `date`, `comment`) VALUES(
  '{$name}',
  '{$number}',
  '{$guest}',
  '{$date}',
  '{$comment}',
    );";
 mysqli_query($conn,$sql);
 header('Location: http://localhost/practice3/index.php');
?>
