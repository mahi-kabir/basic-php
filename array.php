<!-- <?php

//checkbox

        // $fruits = $_POST["fruits"];
        // echo $fruits[0];
    
?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<!--<form action = "array.php" method = "post">
    Toyota: <input type = "checkbox" name = "cars[]" value = "toyota"><br>
    Audi: <input type = "checkbox" name = "cars[]" value = "audi"> <br>
    BMW: <input type = "checkbox" name = "cars[]" value = "bmw"> <br>
    <input type="submit">
 </form> -->

 <!--<form action  = "array.php" method = "post">
    <input type = 'text' name = 'salaries'>
 <input type="submit">
</form> -->


 <?php
    // $cars = $_POST['cars'];
    // echo $cars[0];

//associative array

    //$salaries = array('jim' => 500, 'john' =>400, 'mahi' =>600);
    //echo $salaries['jim'];
     //echo $salaries[$_POST['salaries']]; //taking user input

//function

   ///= function greetings($age){
    //     echo "your age is $age <br>";
    // }

    // greetings(18); 
    // greetings(20);
    // greetings(22);


    //function
    // function intro($name, $age){
    //     echo "hi $name you age is $age";
        
    // }

    // intro('mahi', 25);


//if else

        // $isMale = true;
        // $isTall = false;
        // if($isMale && $isTall){+

        //     echo "He is a tall male";
        // }

        // else if($isMale && !$isTall){
        //     echo 'He is male but not tall';
        // }
        //  else if($isMale || $isTall){
        //      echo "She is tall but not male";
        //  }
       
        // else{
        //     echo "He is tall";
        // }

        function getMin($num1, $num2, $num3){
            if($num1<$num2 && $num1<$num3){
                return $num1;
            }

            else if($num2<$num1 && $num2<$num3){
                return $num2;
            }

            else{
                return $num3;
            }
        }

        echo(getMin(4,3,2));

 ?>
</body>
</html>