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
    $Password=$_POST['Password'];

    $sql="SELECT * FROM register WHERE Name='$Name' AND Password='$Password'";

    $query=mysqli_query($connection,$sql);

    if($query)
    {
        echo "<br>";
        echo "Here is your data";
        $r=mysqli_fetch_array($query);
        if($r>0)
        {
            echo "<br>";
            echo "<table border=1>";
            echo "<tr>";
            echo "<th>";
            echo "Name";
            echo "</th>";
            echo "<th>";
            echo "Surname";
            echo "</th>";
            echo "<th>";
            echo "Password";
            echo "</th>";
            echo "<th>";
            echo "Address";
            echo "</th>";
            echo "<th>";
            echo "Mobile";
            echo "</th>";
            echo "<th>";
            echo "DOB";
            echo "</th>"; 
            echo "<th>";
            echo "service";
            echo "</th>";
            echo "<th>";
            echo "bank";
            echo "</th>";
            echo "<th>";
            echo "Gender";
            echo "</th>";                    
            echo "</tr>";   
            
            echo "<tr>";
            echo "<td>";
            echo $r['Name'];
            echo "</td>";
            echo "<td>";
            echo $r['Surname'];
            echo "</td>";
            echo "<td>";
            echo $r['Password'];
            echo "</td>";
            echo "<td>";
            echo $r['Address'];
            echo "</td>";
            echo "<td>";
            echo $r['Mobile'];
            echo "</td>";
            echo "<td>";
            echo $r['DOB'];
            echo "</td>";
            echo "<td>";
            echo $r['service'];
            echo "</td>";
            echo "<td>";
            echo $r['bank'];
            echo "</td>";
            echo "<td>";
            echo $r['Gender'];
            echo "</td>";
            echo "</tr>";
            echo "</table>";
        }
    }
    else
    {
        echo "<br>";
        echo "Error";
        $sql=$connection->error_log("Error occured");
    }
}

    ?>