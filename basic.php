<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container">
        this is ny first
    </div>
    <?php
    echo "hello again";
    $var1 = 45;
    $var2 = 5;
    echo $var1;
    echo $var2;
    echo $var1 + $var2;



    ?>

    <?php
    //operators in php
    //arithemetic operators
    echo "the value of var1 and var2 is ";
    echo "<br>";
    echo $var1 + $var2;
    echo "<br>";

    ?>
    <!-- assignment operators -->
    <?php

    $newvar = $var1;
    echo "the value of new variable is";
    echo "<br>";
    echo $newvar;
    echo "<br>";
    echo  $newvar += 1
    ?>
    <!-- comparison operators -->
<?php
   echo "<br>";
   echo"the value of 1 ===4 is";
   echo var_dump(1===4);
   ?>
<!-- increment /decrement operators -->
<?php
   echo "<br>";
   echo $var1++;
   echo "<br>";
   
   echo $var1;

   echo "<br>";
   echo"logical operators";
   echo "<br>";
   $myvar=(true and true);
   echo var_dump($myvar);
   ?>
   <?php
    echo "<br>";
echo"--------------------------------Datatypes--------------------";
echo "<br>";
$vara="this is a string";
echo var_dump($vara);
?>


<?php
 echo "<br>";
define('pi',3.14);
echo pi;
?>



</body>

</html>