<?php

if(isset($_POST['Name']))
{
    $server="localhost";
    $username="root";
    $password="";

    $connection=mysqli_connect($server,$username,$password,"netbank");

    if(!$connection)
    {
        die("connection to the database nahi hua kyu ki".mysqli_connect_error());
    }
    echo "Connected successfully";


    $Name=$_POST['Name'];
    $Surname=$_POST['Surname'];
    $Password=$_POST['Password'];
    $Address=$_POST['Address'];
    $Mobile=$_POST['Mobile'];
    $DOB=$_POST['DOB'];
    $service=$_POST['service'];
    $bank=$_POST['bank'];
    $Gender=$_POST['Gender'];
    

        echo "<br>";
        echo $sql="INSERT INTO `register`(`Name`, `Surname`, `Password`, `Address`, `Mobile`, `DOB`, `service`, `bank`, `Gender`) 
        VALUES ('$Name','$Surname','$Password','$Address','$Mobile','$DOB','$service','$bank','$Gender')";
        
    $query=mysqli_query($connection,$sql);

    if($query)
    {
        echo "<br>";
        echo "Data inserted successfully";
    }

    else
    {
        echo "<br>";
        echo "Error";
        //$sql $connection->error_log("Error occured")
    }

}

?>