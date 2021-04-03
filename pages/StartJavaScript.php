<?php

    session_start();


    $servername = 'localhost' ;
    $username = 'username';
    $password = 'password';
    $database = 'Courses';

    $sql = null;
    $data = null;
    $date = date('Y-m-d H:i:s');
    $conn = null;
    try
    {
        $conn = new PDO("mysql:host=$servername;dbname=$database",$username,$password);
        $conn -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        echo "Connected <br/>";
    }
    catch(PDOException $e)
    {
        echo "Connection failure with error code" . $e;
    }

    if(isset($_SESSION['UserId']))
    {
        echo "There's a user ID <br/>";
        
        $sql = $conn -> prepare("SELECT * FROM Lesson WHERE MemberID=? AND CourseID=?");
        $sql -> execute(array($_SESSION['UserId'],'2'));

        $data = $sql -> fetch();

        if(isset($data['CourseID']))
        {
            header('Location:./JavaScriptCourse.php?Started=1');
            echo "There's an id";
        }
        else
        {
            $sql1 = $conn -> prepare("INSERT INTO Lesson (MemberID,CourseID,Started)VALUES(?,'2',?)");
            $sql1 -> execute(array($_SESSION['UserId'],$date));
            echo "There's no id";
            header("Location:./JavaScriptCourse.php?Started=1");
        }

        
    }
    $conn = null;



?>