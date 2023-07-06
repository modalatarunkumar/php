<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="post">    
    <label for="state">Choose state:</label>
    <select name="state" id="state">
        <option value="">-- select the state --</option>
        <?php
        include '05-07-2023(1).php';
        $sql="select * from state";
        if($result=mysqli_query($conn,$sql)){
            if(mysqli_num_rows($result)>0){
                while($row=mysqli_fetch_array($result))
                echo '<option value="'.$row["state_code"].'">'.$row["state_name"].'</option>';
            }
        }


        ?>
    </select><br>
            <?php
            if(isset($_POST['state'])){
                $num=$_POST['state'];
                // echo $num;
                echo '<label for="dist">Choose District</label>';
                echo '<select name="dist" id="dist"><option value="">--Select State--</option>';
                $sql="select * from dist where state_code=$num";
                if($result=mysqli_query($conn,$sql)){
                    if(mysqli_num_rows($result)>0){
                        while($row=mysqli_fetch_array($result))
                        echo '<option value="'.$row["dist_code"].'">'.$row["dist_name"].'</option>';
                    }
                }
                echo '</select>';
            }

            ?>
            <br>
            <button type="submit" value="Submit">Submit</button>

    </form>
</body>
</html>