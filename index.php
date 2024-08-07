<?php
$table = 'php_docker_table';
$mysqli = new mysqli("db", "php_docker", "password", "php_docker");
$query = "SELECT * FROM ". $table;
$result = $mysqli->query($query);

echo "<strong>$table</strong>";
while($row = $result->fetch_assoc()){
    echo "<p>" . $row['title'] . "</p>";
    echo "<p>" . $row['body'] . "</p>";
    echo "<p>" . $row['date_created'] . "</p>";
    echo "<hr>";
}
$mysqli -> close();