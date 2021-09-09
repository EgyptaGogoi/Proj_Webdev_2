<?php 
    $dbServername="localhost";
    $dbUsername="root";
    $dbPassword="aeaspire";
    $dbName="usercontact";

    $conn= mysqli_connect( $dbServername,$dbUsername,$dbPassword,$dbName);
    if($conn=== false)
    {
        die("ERROR : Could not connect to Database".mysqli_connect_error());
    }

    $fullname=$_REQUEST['fname'];
    $email=$_REQUEST['email'];
    $issue=$_REQUEST['issue'];
    $comment=$_REQUEST['comment'];

    $sql="INSERT INTO users VALUES( '$fullname','$email','$issue','$comment');";

    if(mysqli_query($conn,$sql))
    {
        include_once('submitted.html');
    }
    else
    {
        echo "Sorry! Error : $sql.".mysqli_error($conn);
    }
    mysqli_close($conn);  
?>
