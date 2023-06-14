<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pallindrome</title>
</head>
<body>
    <form action="#" method="post">
        <div>
            <label for="num">Enter a number:</label>
            <input type="number" name="num" id="num">            
        </div>    
        <!--<label>gender</label>
        <input type="radio" name="gender" id="male"><label for="male">Male</label>
        -->
        <button>Click</button>
    </form>
    <?php
    if($_POST){
        $number=$_POST['num'];
        $temp=$number;
        $rev=0;
        while($number>0){
            $rem=$number%10;
            $rev=$rev*10+$rem;
            $number=(int)($number/10);
        }
        if($rev==$temp)
        echo "Pallindrome ".$temp;
        else
        echo "Not a pallindrome ".$temp;
    }
    ?>
    <form action="#" method="get">
        <div>
            <label for="nm">Enter a name:</label>
            <input type="text" name="nm" id="nm">
        </div>
        <button>Click</button>
    </form>
    <?php
    if($_GET){
        $name=$_GET['nm'];
        //echo $name;
        $length=strlen($name);
        $condition=true;
        for($i=0;$i<$length/2;$i++){
            if($name[$i]!=$name[$length-$i-1]){
                $condition=false;
                break;
            }
        }
        if($condition)
        echo "Pallindrome ".$name;
        else
        echo "Not a pallindrome ".$name;
    }

    ?>
</body>
</html>