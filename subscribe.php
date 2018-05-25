<?php
$conn = mysqli_connect('localhost', 'eatrev', 'youthrocker', 'EatRev');
$email = mysqli_real_escape_string($conn, $_POST['email']);
$sql = "INSERT INTO subscribe ( email) VALUES ('$email'); ";
if(mysqli_query($conn, $sql)){
    echo "Thanks For subscribing";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
?>
