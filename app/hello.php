<?php
    $password = getenv('POSTGRES_PASSWORD');
    $username = getenv('POSTGRES_USERNAME');
    $db = getenv('POSTGRES_DB');
    $host = getenv('POSTGRES_HOST');
    $dbconn = pg_connect("host=" . $host . 
                         " dbname=" . $db .
                         " user=" . $username . 
                         " password=" . $password) 
                         or die('Could not connect: ' . pg_last_error());

    echo "Inventory System" . "<br>";

    if ($dbconn) {
        $version = pg_version($dbconn);

        echo "Database connection: OK" . "<br>";
        echo "Database response: " . $version['client'] . "<br>";
    }

    pg_close($dbconn);
?>