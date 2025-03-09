<?php 

//var_dump($_SERVER["REQUEST_METHOD"]); // Check what the request method is
//var_dump($_POST); // Check what the post array is


if($_SERVER["REQUEST_METHOD"]== "POST") {

    $firstname = htmlspecialchars($_POST["firstname"]);
    $lastname = htmlspecialchars($_POST["lastname"]);
    $favouritepets = htmlspecialchars($_POST["favouritepets"]);

    if(empty($firstname)) {
        exit("First name is required");
        header("Location: ../index.php"); //Send to home page
    }


    echo "These are the data user submited";
    echo "<br>";
    echo $firstname;
    echo "<br>";
    echo $lastname;
    echo "<br>";
    echo $favouritepets;
    echo "<br>";

    header("Location: ../index.php"); //Send to home page
} else {
    header("Location: ../index.php"); //Send to home page
}   