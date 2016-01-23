<?php
// Include database class
include 'database.php';
include 'session.php';

// Define configuration
define("DB_HOST", "localhost");
define("DB_USER", "User");
define("DB_PASSWORD", "PcBDmjqAF9D8WrNG");
define("DB_NAME", "chart001");

//$database = new Database();

$session = new Session();
$session->_read("nu9e7e872k8fcn65mkg5m67ar4");

echo "<pre>";
print_r($_SESSION);
echo "</pre>";

/*$session->_open();
$session->_write(1234, "test");
$session->_read(1234);
echo "<pre>";
print_r($_SESSION);
echo "</pre>";
$session->_close();
$session->_destroy(1234);

*/

/*
// insert

$database->query('INSERT INTO mytable (FName, LName, Age, Gender) VALUES (:fname, :lname, :age, :gender)');

$database->bind(':fname', 'Phil');
$database->bind(':lname', 'Alton');
$database->bind(':age', '23');
$database->bind(':gender', 'male');

$database->execute();
echo $database->lastInsertId();

//multiple records

$database->beginTransaction();

$database->query('INSERT INTO mytable (FName, LName, Age, Gender) VALUES (:fname, :lname, :age, :gender)');

$database->bind(':fname', 'Jenny');
$database->bind(':lname', 'Smith');
$database->bind(':age', '23');
$database->bind(':gender', 'female');

$database->execute();

$database->bind(':fname', 'Jilly');
$database->bind(':lname', 'Smith');
$database->bind(':age', '25');
$database->bind(':gender', 'female');

$database->execute();

echo $database->lastInsertId();

$database->endTransaction();

//select

$database->query('SELECT FName, LName, Age, Gender FROM mytable WHERE FName = :fname');

$database->bind(':fname', 'Jenny');

$row = $database->single();

echo "<pre>";
print_r($row);
echo "</pre>";

//select multiple

$database->query('SELECT FName, LName, Age, Gender FROM mytable WHERE LName = :lname');

$database->bind(':lname', 'Smith');

$rows = $database->resultset();

echo "<pre>";
print_r($rows);
echo "</pre>";

echo $database->rowCount();
*/
?>