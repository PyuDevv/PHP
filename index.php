<html>
    <head>
        <title>My First Web Server</title>
    </head>

    <body>
        <?php
            echo("<h1>My First Web Server</h1>");
            echo("<h2>Hello, world!</h2>");
            $username = readline("Enter your username: ");
            echo("<h3>Hello, " . $username . "</h3>");
        ?>
    </body>
</html>