<?php

    session_start();


    $servername='localhost';
    $database='Courses';
    $username='username';
    $password='password';

    $conn = null;

    try
    {
        $conn = new PDO("mysql:host=$servername;dbname=$database",$username,$password);
        $conn -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        echo "Connected";
    }
    catch(PDOException $e)
    {   
        echo "Connection failure with error code " .$e;
    }

    echo $_FILES['ProfileUpload2']['name'];

    if(isset($_POST['Submit']))
    {
        echo "<br/>True";
        $target='../uploads/'.basename($_FILES['ProfileUpload2']['name']);
       
        $sql = $conn -> prepare ("INSERT INTO CoverImage (MemberID,Src) VALUES (?,?)");
       
        

        if(move_uploaded_file($_FILES['ProfileUpload2']['tmp_name'],$target))
        {   
           
            echo "Moved as fuck";
            header("Location:./Member.php");
            $sql -> execute(array($_SESSION['UserId'],$_FILES['ProfileUpload2']['name']));
        }
        else
        {
            echo"Upload Failure try fucking again later";
            header("Location:./Member.php?Upload=ldsjfsmakjshdfa");
        }
    }
    else
    {
        header("Location:./Member.php?Upload=ldsjfsmakjshdfa");
    }

?>