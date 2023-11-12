<?php
$hosting="localhost";
$database="turkey_city_district";
$dbusername="root";
$dbpass="root";

try {
    $db = new PDO("mysql:host={$hosting};dbname={$database}",$dbusername, $dbpass);

} catch ( PDOException $e ){
    print $e->getMessage();
}
$db->exec("SET NAMES 'utf8'; SET CHARSET 'utf8'");

?>