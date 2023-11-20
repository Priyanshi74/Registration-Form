<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css
" rel="stylesheet">
</head>
<body>
     <div>
        <h1>List of candidates</h1>
        <div>
            <div class="table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>name</th>
                            <th>age</th>
                            <th>gender</th>
                            <th>email</th>
                            <th>phone</th>
                            <th>desc</th>
                            <th colspan="2">operation</th>
                        </tr>
                    <thead>
                    <tbody>

                    <?php
                       include 'connection.php';
 
                       $selectquery = "select * from trip";

                       $query = mysqli_query($con,$selectquery);

// $nums = mysqli_num_rows($query);  it gives no. of rows in our table
// echo $nums;

                        $res = mysqli_fetch_array($query);

                        while($res = mysqli_fetch_array($query)){
                        ?>   
                            <tr>
                            <td><?php echo $res['sno']; ?></td>
                            <td><?php echo $res['name']; ?></td>
                            <td><?php echo $res['age']; ?></td>
                            <td><?php echo $res['gender']; ?></td>
                            <td><?php echo $res['email']; ?></td>
                            <td><?php echo $res['phone']; ?></td>
                            <td><?php echo $res['other']; ?></td>
                            <td><a href = "updates.php?id=<?php  echo $res['sno'];  ?>" 
                            data-toggle="tooltip" data-placement="bottom" title="UPDATE"
                            ><i class = "fa fa-edit" aria-hidden="true"></i>  </a></td>
                             <td><a href = "delete.php?id=<?php  echo $res['sno'];  ?>" 
                            data-toggle="tooltip" data-placement="bottom" title="DELETE"
                            ><i class = "fa fa-trash" aria-hidden="true"></i>  </a></td>
                        
                        </tr>
                        <?php
                              }

                        ?>
                       
                    </tbody>    
                </table>
            </div>
        </div>
     </div>
<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>

    
</body>
</html>