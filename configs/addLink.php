<?php 
require ("../config.php");

$nameError = "";
$urlError = "";

if(isset($_POST["submit"])) {
    $name = $_POST["name"];
    $urlname = $_POST["url"];


    if (!filter_var($urlname, FILTER_VALIDATE_URL)) {
        $urlError = "Enter valid URL";
    } 
    if (empty($name)) {
        $nameError = "Enter a name";
    } 

    if(empty($urlError) AND empty($nameError)) {
            $insert = $conn->prepare("INSERT INTO urls (url, name) VALUES (:url, :name)");
            $insert->execute([
                ':name' => $name,
                ':url' => $urlname,
            ]);
        header("location: index.php");
    }
}



    
