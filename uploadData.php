<?php

    $conn=new mysqli("localhost","demo000","demo1","demo000");
    
    if($conn){
    }
    else{
    }
 
    $image = $_POST['image'];
    $name = $_POST['name'];
    
    $img = base64_decode($image);
    $image = $name;
    file_put_contents($image, $img);
    
    $conn->query("insert into upload (image) values('".$image."')");

?>