<?php

include 'connection.php';

$id = $_GET['id'];

$deletquery="delete from trip where sno = $id";

$query = mysqli_query($con,$deletquery);

header('location: display.php');
if($query)
{
    ?>
    <script>
        alert("Deleted successfully");
    </script>
    <?php
    
}else{
    ?>
    <script>
        alert("not deleted");
    </script>
    <?php
}


?>