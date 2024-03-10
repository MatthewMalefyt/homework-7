<?php

namespace app\models;

class Post
{
  $connection = include('dbConnection.php');
$name = $_POST['name'];
$query = mysqli_query($connection, "SELECT * FROM clients WHERE name = 
    $name");
$result = mysqli_fetch_array($query);
return $result;
}
