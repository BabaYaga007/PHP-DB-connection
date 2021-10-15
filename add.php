<?php
$blog_num ='1';

    // using mysqli
    
    include 'db_connection2.php';    
    // echo "Connected Successfully";

    //get the post records
    if(isset($_POST['name'])){
        $name = $_POST['name'];
    }
    if(isset($_POST['email'])){
        $email = $_POST['email'];
    }
    if(isset($_POST['message'])){
        $message = $_POST['message'];
    }
    $blog = $blog_num;
    // $date = NOW();
    $date = date("Y-m-d H:i:s");



    // function add_comment()
    // {
    //     echo "hello ".$_POST["studentname"];
    // }
    if(isset($_POST['submit']))
    {
        // $sql = "INSERT INTO comment2 VALUES (now(), '$name', '$email', '$message' , '$blog_num')";
        $sql = "INSERT INTO comment2 VALUES ('$date', '$name', '$email', '$message' , '$blog_num')";

        // insert in database 
        $rs = mysqli_query($conn, $sql);

        if($rs)
        {
            echo "Contact Records Inserted";
            // echo $date;
        }
        else {
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }

    } 


    mysqli_close($conn);


?>