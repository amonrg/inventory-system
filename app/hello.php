<?php
    $env = parse_ini_file('.env');
    $password = $env["POSTGRES_PASSWORD"];
    $username = $env["POSTGRES_USERNAME"];
    $db = $env["POSTGRES_DB"];
    $host = $env["POSTGRES_HOST"];
    $dbconn = pg_connect("host=" . $host . " dbname=" . $db . " user=" . $username . " password=" . $password) or die('Could not connect: ' . pg_last_error());

    echo "Inventory System" . "<br>";

    if ($dbconn) {
        $version = pg_version($dbconn);

        echo "Database connection: OK" . "<br>";
        echo "Database response: " . $version['client'] . "<br>";
    }

    pg_close($dbconn);
?>