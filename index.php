<?php                        //This page creates a json data of any city
                            //Student Name:Biraj jung karki
                           //Student ID:2408893
    $servername="localhost";
    $username="root";
    $password="";
    $database="weather_data";

    $conn=mysqli_connect($servername,$username,$password,$database);
    if(isset($_GET['city']) && !empty($_GET['city'])){
        $city=$_GET['city'];
    }
    else{
        $city="Kollam";
    }
    $selectDATA="SELECT * FROM weatherdata where city='$city'";
    $result=mysqli_query($conn,$selectDATA);
    if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_assoc($result)){
            $rows[]=$row;
        }
        $json_Data=json_encode($rows);
        echo $json_Data;
        header('Content-Type:application/json');//make black field for json data
    }
    ?>