<!DOCTYPE html>
<html lang="en">
<head>
  <title>Registrtion Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <h2>Complete Register User Details</h2>
    
    <table class="table table-stripped table-responsive">
        <tr>
        <th>S.NO</th>
            <th>User Name</th>
            <th>Mobile Number</th>
            <th>Email</th>
            <th>Date Of Birth</th>
            <th>Qualification</th>
            <th>Gender</th>
            <th>Address</th>
             <th>View</th>
             
             <th>Update</th>
            <th>Delete</th>
            
            </tr>
        <tr>
            <?php 
            include_once 'db.php';
            
            // Attempt select query execution
            $fetch = "select * from emp";
             if($result = mysqli_query($conn, $fetch)){
                 if(mysqli_num_rows($result) > 0){ // 5 > 0
                      while($row = mysqli_fetch_array($result)){
                       echo "<td>" .$row['id'] . "</td>";
                      echo "<td>" .$row['user_name'] . "</td>";
                      echo "<td>" . $row['mobile_num'] . "</td>";
                    echo "<td>" . $row['email'] . "</td>";
                          echo "<td>" . $row['dob'] . "</td>";
                          echo "<td>" . $row['course'] . "</td>";
                          echo "<td>" . $row['gender'] . "</td>";
                          //echo "<td>" . $row['mar_status'] . "</td>";
                          echo "<td>" . $row['address'] . "</td>";                         
                          echo "<td>";
                          echo '<a href="read.php?id='.$row['id'].' "><span class="glyphicon glyphicon-eye-open"></span></a> ';
                          
                          
                          
                          
//                        echo '<a href="read.php?id='. $row['id'] .'"  title="View Record" ><span class="glyphicon glyphicon-eye-open"></span></a>';                             
//                              echo "</td>";
                          
                          echo "</td>";
                          
                          
                          echo "<td>"  ."</td>";
                          echo "<td>"  ."</td>";
                          
                          
                          echo "<tr/>";  
                          
                      }
                     
                     
                 }else{
                     echo 'Data is not available in the table';
                 }
                 
             }
            
            
            else{
                 echo 'no Table ';
             }
            
            
            
            ?>
        
        
        
        
        
        </tr>
    
    
    </table>
    
    
    </body>
</html>