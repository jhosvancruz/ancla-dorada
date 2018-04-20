<?php
$db = new PDO("mysql:host=localhost;dbname=eventos", "root", "");

$result = $db->query("SELECT inicio_normal FROM eventos");
while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    print_r($row);
    var_dump($row["inicio_normal"]);
}
$result->closeCursor();
?>
