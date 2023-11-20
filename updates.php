
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

                <?php   include 'connection.php' ;
                 $ids = $_GET['id'];

                 $showquery = "select * from trip where sno = {$ids}";
                 $showdata = mysqli_query($con, $showquery);
                 $arrdata = mysqli_fetch_array($showdata);



             if(isset($_POST['submit'])){

                $idupdate = $_GET['id'];
            $name = $_POST['name'];
            $gender = $_POST['gender'];
            $age = $_POST['age'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $desc = $_POST['desc'];
            //INSERT INTO `trip`(`sno`, `name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) 
            //VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]')
            // $insertQuery= "insert into trip(name,age,gender,email,phone,other) 
            // values ('$name','$age','$gender','$email','$phone','$desc')"  ;

            $query = "update trip set sno=$sno, name='$name'
            , age=$age, gender='$gender', email='$email',phone='$phone', other='$desc' where sno=$idupdate";
            
            $res =  mysqli_query($con,$query);
            if($res){
             ?>
                <script>
                 alert("data updated")
                </script>
            <?php
            }else{
             ?>
                 <script>
                     alert("data not updated")
                 </script>
             <?php
             }
                                     }
            ?> 
            <input type="text" name="name" value = "<?php echo $arrdata['name']; ?>" id="name" placeholder="Enter your name">
            <input type="text" name="age" value = "<?php echo $arrdata['age']; ?>" id="age" placeholder="Enter your Age">
            <input type="text" name="gender"  value = "<?php echo $arrdata['gender']; ?>" id="gender" placeholder="Enter your gender">
            <input type="email" name="email" value = "<?php echo $arrdata['email']; ?>"  id="email" placeholder="Enter your email">
            <input type="phone" name="phone" value = "<?php echo $arrdata['phone']; ?>"  id="phone" placeholder="Enter your phone">
            <textarea name="desc" value = "<?php echo $arrdata['other']; ?>" id="desc" cols="30" rows="10" placeholder="Enter any other information here"></textarea>
            <button class="btn" name="submit">Update</button> 
        </form>
    </div>


    
</body>
</html>


?>