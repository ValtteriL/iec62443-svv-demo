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
    if ($_SERVER['REQUEST_METHOD'] === 'POST')
    {
        if (isset($_POST['name']) && isset($_POST['password']))
        {
            $name = $_POST['name'];
            $password = $_POST['password'];

            if (strcmp($password, getenv("PASSWORD")) !== 0) {
                http_response_code(400);
                exit;
            }

            printf("<h1>Greetings %s!</h1>", htmlspecialchars($name, ENT_QUOTES, 'UTF-8'));
        }
        else
        {
            http_response_code(400);
            exit;
        }
    }

    ?>

    <section>
        <h2>Use notice</h2>
        <textbox><?php print(getenv("USE_NOTICE")); ?></textbox>
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