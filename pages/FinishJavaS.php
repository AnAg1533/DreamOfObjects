<?php

    session_start();

    echo "hey there you fucks";
    $servername = 'localhost';
    $username = 'username';
    $database = 'Courses';
    $password = 'password'; 

    $date = date('Y-m-d H:i:s');
    $sql = null;

    try
    {
        $conn = new PDO("mysql:host=$servername;dbname=$database",$username,$password);
        $conn -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        
        echo "Connected";
    }
    catch(PDOException $e)
    {
        echo "Connection failure with error code " . $e;
    }

    if(isset($_SESSION['UserId']))
    {   
        $sql1 = $conn -> prepare("SELECT * FROM LESSON WHERE MemberID=? AND CourseID=?");
        $sql1 -> execute(array($_SESSION['UserId'],'2'));
        echo "There's a user id";
        $sql = $conn -> prepare("UPDATE Lesson SET Finished = ? WHERE MemberID=? AND CourseID=?");

        $sql -> execute(array($date,$_SESSION['UserId'],'2'));

        header("Location:./JavaScriptCourse.php");
    }




?>