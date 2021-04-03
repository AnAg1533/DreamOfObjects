<?php


    $server = 'localhost';
    $database = 'Courses';
    $username = 'username';
    $password = 'password';

    try
    {
        $conn = new PDO("mysql:host=$server;dbname=$database",$username,$password);
        $conn -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        echo "Connected";
    }
    catch(PDOException $e)
    {
        echo "Connection Failure with error code : ". $e;
    }

    $sql1 = $conn -> prepare("SELECT Email FROM Member WHERE Email=? ");
    $sql1 -> execute(array($_POST['Email']));
    $data1 = $sql1 -> fetch();

    $sql2 = $conn -> prepare("SELECT UserName From Member WHERE UserName = ?");

    $sql2 -> execute(array($_POST['UserName']));

    $data2 = $sql2->fetch();
    
    $Email = null;
    $UserName = null;
    $MemberShip = null;

    if(isset($data1["Email"]))
    {
        header("Location:../index.php?ERRORCODE=1#FormSection<br/>");
    }
    else
    {
        $Email = $_POST['Email'];
        echo "Error  404 Data lost or not Found<br/>";
    }

    if(isset($data2["UserName"]))
    {
        header("Location:../index.php?kjjsahdlsajd=2#FormSection");
    }
    else
    {
        echo "Data lost or not found";
       $UserName = $_POST["UserName"];
    }

    $Name = $_POST['Name'];
    $LastName = $_POST['LastName'];
    $Pass = password_hash($_POST['Password'],PASSWORD_BCRYPT);
    $MemberShip = $_POST['Membership'];


    echo $Name .' <br/>';

    echo $LastName . '<br/>';

    echo $Pass . '<br/>';

    echo $MemberShip . '<br/>';

    echo $Email . '<br/>';

    echo $Pass . '<br/>';
    
    $sql3 = $conn -> prepare("INSERT INTO Member (Name,LastName,UserName,Email,Password,MemberShip) VALUES(?,?,?,?,?,?)");

    $sql3 -> execute(array($Name,$LastName,$UserName,$Email,$Pass,$MemberShip));

    $conn = null;

    header("Location:../index.php?saldh1432lkjh123=756");

    

    
?>