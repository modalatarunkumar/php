<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Armstrong number</title>
</head>
<body>
    <form action="#" method="post">
        <div>
            <label for="numm">Enter a number</label>
            <input type="text" name="numm" id="numm">
        </div>
        <input type="button" value="submit">
    </form>
    <?php
    if($_POST){
        $num=$_POST['numm'];
        // $num=12345;
        for($i=9;$i<=$num;$i++){
            $temp=$i;
            $sum=0;
            $len=0;
            
            while($temp>0){$temp=(int)($temp/10);$len++;}
            $temp=$i;
            while($temp>0){
                $rem=$temp%10;
                $sum+=pow($rem,$len);
                $temp=(int)($temp/10);
            }
            if($sum==$i)
            echo $i." is Armstrong<br>";
            // else
            // echo $i." not Armstrong<br>";        
        }
        
   }
    ?>
</body>
</html>