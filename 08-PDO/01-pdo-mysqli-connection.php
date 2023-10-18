<?php

/*
 * Database Support:
PDO: PDO is a general database access class that can work with different database types
(MySQL, PostgreSQL, SQLite, Oracle, etc.), making it easy to switch between different
databases in your application.

 * Data Binding:
PDO: It works with placeholder parameters for data binding and has less strict data type checking.
This allows for more portability and dynamic coding in your application.

 * Object-Oriented and Procedural Functions:
PDO: PDO can be used with both object-oriented and procedural functions.

 * Connection Management:
PDO: Connection management can be more automatic and flexible, making it easier to connect to multiple
databases simultaneously or reuse connections.

 * Features:
PDO: PDO offers a more general structure for easy switching between different databases.
*/

try {
    $host = 'localhost';
    $dbname = 'testdb';
    $username = 'root';
    $password = '';

    $db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", "$username", "$password");

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //$db->query('USE your');
    $db->query("SET CHARACTER SET utf8mb4");
    $db->query("SET CHARACTER_SET_CONNECTION=utf8mb4");
    $db->query("SET @@lc_time_names = 'tr_TR'");

} catch ( PDOException $e ){
    print $e->getMessage();
}


/*
 * Database Support:
MySQLi: MySQLi is specifically designed for MySQL databases and does not provide support
for other database types.

 * Data Binding:
MySQLi: MySQLi supports both placeholder parameters and strict data type checking for queries,
which helps catch errors earlier and enhances data security.

 * Object-Oriented and Procedural Functions:
MySQLi: MySQLi provides support for both object-oriented and procedural functions, offering
developers flexibility according to their preferences.

 * Connection Management:
MySQLi: Connection management is more explicit and manual, requiring separate connections for
different operations.

 * Features:
MySQLi: MySQLi is optimized for MySQL and provides better support for some of MySQL server's
specific features and enhanced performance.
*/

try {
    $host = 'localhost';
    $dbname = 'testdb';
    $username = 'root';
    $password = '';

    $conn = mysqli_connect($host, $username, $password, $dbname);

    // If there's a connection error, go to the catch block
    if ($conn->connect_error) {
        throw new Exception("Connection error: " . $conn->connect_error);
    }

    echo "Connection established.";
    // Database operations can be performed here

    // Close the connection
    $conn->close();
} catch (Exception $e) {
    // This block will run in case of a connection or query error
    echo "Error: " . $e->getMessage();
}