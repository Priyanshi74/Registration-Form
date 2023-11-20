<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel Form</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto|Sriracha&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="bg" src="bg.jpg" alt="IIT Kharagpur">
    <div class="container">
        <h1>Welcome to IIT Kharagpur US Trip form</h3>
        <p>Enter your details and submit this form to confirm your participation in the trip </p>
        <a href="display.php">Check Form</a>
        
        <form action="index.php" method="post">
            <input type="text" name="name" value = "" id="name" placeholder="Enter your name">
            <input type="text" name="age"  value = "" id="age" placeholder="Enter your Age">
            <input type="text" name="gender" value = ""  id="gender" placeholder="Enter your gender">
            <input type="email" name="email" value = "" id="email" placeholder="Enter your email">
            <input type="phone" name="phone" value = ""  id="phone" placeholder="Enter your phone">
            <textarea name="desc"  value = "" id="desc" cols="30" rows="10" placeholder="Enter any other information here"></textarea>
            <button class="btn" name="submit">Submit</button> 
        </form>
    </div>

 <?php   include 'connection.php' ;
  if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $desc = $_POST['desc'];
    //INSERT INTO `trip`(`sno`, `name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) 
    //VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]')
    $insertQuery= "insert into trip(name,age,gender,email,phone,other) values ('$name','$age','$gender','$email','$phone','$desc')"  ;
    $res =  mysqli_query($con,$insertQuery);
    if($res){
        ?>
        <script>
            alert("data inserted")
        </script>
        <?php
    }else{
        ?>
        <script>
            alert("data not inserted")
        </script>
        <?php
    }
    }
?>   
</body>
</html>
