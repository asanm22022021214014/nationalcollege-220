<?php 
include("connection.php");
$id = $_GET['id'];

$query = "DELETE  FROM kanna  WHERE id = '$id' ";
$data = mysqli_query($conn, $query);

if($data)
{
    echo "Record Deleted";

    ?>
      <meta http-equiv = "refresh" content = "0; url = http://localhost/crud/display.php"/>

    <?php
}
else
{
    echo "Failed To Delete";
}
?>