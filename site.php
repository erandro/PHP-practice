<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>

    <?php
        //php -S localhost:4000

        //*** Writing HTML ***
        // $name = "john";
        // $age = 35;
        // echo "<h1>Eran's Website</h1>" ;
        // echo "<hr>";
        // echo "<p>this is my site homie</p>";
        // echo "<p>my $name is eran and I'm $age years old</p>";
        // $name = "eran";
        // $age = 80;
        // echo "<p>my $name is eran and I'm $age years old</p>";
        
        //*** Variables ***
        // $integer = 30;
        // $decimal = 32.34;
        // $text = "Texty Text";
        // $boolean = true;

        //*** Working With Strings ***
        //echo strtolower($text);
        //echo strtoupper($text);
        //echo strlen($text);
        //echo $text[3];
        //echo str_replace("Text", "Boom", $text);
        //echo substr($text, 6, 3);

        //*** Working With Numbers ***
        //*** https://www.tutorialrepublic.com/php-tutorial/php-math-operations.php
        // echo 50;
        // echo "<br>";
        // echo -30;
        // echo "<br>";
        // echo 5.897;
        // echo "<br>";
        // echo 50+3;
        // echo "<br>";
        // echo 10%3;
        // echo "<br>";
        // echo (2+1)*10
        //
        // $num = 10;
        // $num *= 3;
        // echo $num;
        //
        // echo abs(-100);
        // echo "<br>";
        // echo pow(2,3);
        // echo "<br>";
        // echo sqrt(144);
        // echo "<br>";
        // echo max(2,10);
        // echo "<br>";
        // echo min(2,10);
        // echo "<br>";
        // echo round(1.56783);
        // echo "<br>";
        // echo ceil(9.2);
        // echo "<br>";
        // echo floor(9.8);       
    ?>

    <!-- Getting User Input -->
    <!-- <form action="site.php" method="get">
        Name: <input type="text" name="name">
        <br>
        Age: <input type="text" name="age">
        <br>
        <input type="submit">
    </form>
    Your name is: -->
    <?php
    //    echo $_GET["name"];
    ?>
    <!-- <br>
    Your age is: -->
    <?php
    //    echo $_GET["age"];
    ?>

    <!-- Building a Basic Calculator -->
    <!-- <form action="site.php" method="get">
        <input type="number" name="num1">
        <br>
        <input type="number" name="num2">
        <br>
        <input type="submit">
    </form> -->
    <?php //echo $_GET["num1"] + $_GET["num2"]?>
    
    <!-- Building a Mad Libs Game -->
    <!-- <form action="site.php" method="get">
        Color:<input type="text" name="color">
        <br>
        Settelment:<input type="text" name="settelment">
        <br>
        Adjective:<input type="text" name="adjective">
        <br>
        Place:<input type="text" name="place">
        <br>
        <input type="submit">
    </form> -->
    <?php
        // $color = $_GET["color"];
        // $settelment = $_GET["settelment"];
        // $adjective = $_GET["adjective"];
        // $place = $_GET["place"];
        // echo "His $color tight pants were the talk of the $settelment <br>";
        // echo "Even the mayor of $place said they are the most $adjective pants in all the land"
    ?>
    
    <!-- URL Parameters -->
    <!-- <form action="site.php" method="get">
        <input type="text" name="name">
        <br>
        <input type="submit">
    </form>
    <br> -->
    <?php
        // echo $_GET["name"];
    ?>

    <!-- Get vs Post -->
    <!-- <form action="site.php" method="post">
        <input type="password" name="password">
        <br>
        <input type="submit">
    </form>
    <br> -->
    <?php
       // echo $_POST["password"];
    ?>

    <!-- Arrays -->
    <?php
    // $animals = array("cat", "dog", "fish", "bird");
    // $animals[2] = "camel";
    // $animals[4] = "bear";
    // echo $animals[2];
    // echo count($animals);
    ?>

    <!-- Using Checkboxes -->
    <!-- <form action="site.php" method="post">
        Cat: <input type="checkbox" name="animals[]" value="cat"><br>
        Dog: <input type="checkbox" name="animals[]" value="dog"><br>
        Fish: <input type="checkbox" name="animals[]" value="fish"><br>
        Bird: <input type="checkbox" name="animals[]" value="bird"><br>
        <input type="submit">
    </form> -->
    <?php
        // $animals = $_POST["animals"];
        // echo $animals[0];
    ?>

    <!-- Associative Arrays -->
    <!-- <form action="site.php" method="post">
        <input type="text" name="name">
        <input type="submit">
    </form> -->
    <?php
        // $grades = array("Bill"=>"A+", "Max"=>"B", "John"=>"A-");
        // echo $grades[$_POST["name"]];
    ?>

    <!-- Functions -->
    <?php
        // function greeting($user){
        //     echo "Hello $user <br>";
        // }
        // greeting("Eran");
        // greeting("Tom");
    ?>

    <!-- Return Statements -->
    <?php
        // function qube($num){
        //     return $num * $num * $num;
        // }
        // echo qube(8);
    ?>

    <!-- If Statements -->
    <?php
        // $gotMail = false;
        // $fromNatalie;
        // if ($gotMail) {
        //     $fromNatalie = true;
        // }
        // if ($gotMail && $fromNatalie){
        //     echo "You got mail from Natalie";
        // } else if (!$gotMail) {
        //     echo "No mail";
        // } else if ($gotMail || $fromNatalie) {
        //     echo "You got mail, but it's not from Natalie";
        // }
    ?>

    <!-- If Statements (con't) -->
    <?php
        // to make afunction that does that: echo max(3, 6)
        // function maxNum($num1, $num2, $num3){
        //     if ($num1 < $num2){
        //         if ($num3 < $num2){
        //             return $num2;    
        //         } else {
        //             return $num3;
        //         }
        //     } else {
        //         if ($num3 < $num1){
        //             return $num1;    
        //         } else {
        //             return $num3;
        //         }
        //     }
        // }
        // echo maxNum(90, 30, 15)
    ?>

    <!-- Building a Better Calculator -->
    
    <!-- Switch Statements -->
    <!-- While Loops -->
    <!-- For Loops -->
    <!-- Comments -->
    <!-- Including HTML -->
    <!-- Include: PHP -->
    <!-- Classes & Objects -->
    <!-- Constructors -->
    <!-- Object Functions - PHP - Tutorial 31 -->
    <!-- Getters & Setters -->
    <!-- Inheritance -->

</body>
</html>