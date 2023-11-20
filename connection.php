 <?php   
    $server = "localhost";
    $username = "root";
    $password = "";
    $db = "trip";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password,$db);

    // Check for connection success
    if($con){
        echo "connection successful";
    }
    else{
        die("connection to this database failed due to" . mysqli_connect_error());
    }
 ?>   