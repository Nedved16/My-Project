<?php


//echo 'Connection successfully';
//$query = 'SELECT * FROM articles';

//$result = $connection->query($query);
//var_dump($result);

//if ($result) {
  //////  while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
   //     var_dump($row);
//    }
//}


//$connection->close();

function getConnection() {
    $servername = 'db';
    $username = 'root';
    $password = 'test1_root';
    $dbname = 'test1';

    $connection = mysqli_connect($servername, $username, $password, $dbname);

//var_dump($connection);

    if ($connection->connect_error) {
        die(sprintf('Connection failed: %s', $connection->connect_error));
    }
return $connection;}