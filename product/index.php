<?php

require 'vendor/autoload.php';

use App\Database as Database;
use App\Logger;

$db = new Database();
$logger = new Logger("app.log");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Greeting generator</title>
</head>

<body>
    <?php
    $password = getenv("PASSWORD");
    $use_notice = getenv("USE_NOTICE");

    // abort if no password set
    if (!$password) {
        http_response_code(500);
        $logger->logInvalidConfig();
        print("PASSWORD env not set");
        exit;
    }

    // abort if no password is not strong enough
    if (strlen($password) < 8) {
        http_response_code(500);
        $logger->logInvalidConfig();
        print("Password is too weak");
        exit;
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['name']) && isset($_POST['password'])) {
            $post_name = $_POST['name'];
            $post_password = $_POST['password'];

            // check if account has been locked
            if ($db->isAccountLocked()) {
                $logger->logAccountLocked();
                http_response_code(400);
                exit;
            }

            if (strcmp($post_password, $password) !== 0) {
                // incorrect password
                $db->recordFailedAttempt(); // insert new failed attempt to db
                $logger->logInvalidPassword();
                http_response_code(400);
                exit;
            }

            // successful login

            $db->clearFailedAttempts(); // remove all failed attempts
            $logger->logSuccesfulGreeting();
            printf("<h1>Greetings %s!</h1>", htmlspecialchars($post_name, ENT_QUOTES, 'UTF-8'));
        } else {

            // invalid input

            $logger->logInvalidInput();
            http_response_code(400);
            exit;
        }
    }

    ?>

    <section>
        <h2>Use notice</h2>
        <textbox>
            <?php print(htmlspecialchars($use_notice, ENT_QUOTES, 'UTF-8')); ?>
        </textbox>
    </section>
    <section>
        <h2>Generate greeting</h2>
        <form method="POST">
            <div>
                <label>Your name</label>
                <input name="name" type="text">
            </div>
            <div>
                <label>Password</label>
                <input name="password" type="password">
            </div>
            <div>
                <input type="submit" value="Generate greeting">
            </div>
        </form>
    </section>
</body>

</html>