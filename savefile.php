<?php
$name = $_POST["name"];
$email = $_POST["email"];
$msg = $_POST["message"];
$fileCounter = 1;
while (file_exists("messages/" . "$fileCounter" . ".txt")) {
    $fileCounter++;
}
$submissionFile = fopen("messages/" . "$fileCounter".".txt", 'w') or die("Unable to open file!");
if(fwrite($submissionFile, $name . "\n" . $email . "\n" . $msg) != FALSE) {
    echo "<h2>" . "Successfully submitted the message";
}
fclose($submissionFile);
?>