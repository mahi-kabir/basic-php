<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="site.php" method="get">
    <input type = "text" name = "userName">
    <input type = "age" name = "age">
    <input type = "submit">
</form>

    your name is <?php echo $_GET["userName"];
        // $name = "Mahi";
        // $age = 40;

        // echo "Once there was a man named $name <br>";
        // echo "He was $age years old <br>"; 
        // echo "He liked his name $name <br>";
        // echo "But he didn't like to be $age";

        //Playing with strings
        $phrase = "Hello there!";
        // echo strtolower($phrase); 
        // echo strtoupper($phrase);
        // echo strlen($phrase)
        // echo $phrase[]
        // echo "Mahi"[1];
        // $phrase[0] = "T";
        // echo $phrase;
        $place = "Central Basabo";
        //echo str_replace('Central', 'South', $place);  //string replace
        //echo substr($place,8,4);


        //Playing with numbers
        //$num = -20;
        //$num = $num+10;
        //$num = $num +2;
        //$ab = abs($num);  //gives absolute value..

        //echo ceil(4.02); //gives upper value
        //echo floor(4.22);  //gives lower value
        
        


    ?>
</body>
</html>