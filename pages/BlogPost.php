<?php

    $servername = 'localhost';
    $password = 'password';
    $username = 'username';
    $database = 'Courses';


    try
    {
        $conn = new PDO("mysql:host=$servername;dbname=$database",$username,$password);
        $conn -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        echo "Connected";
    }
    catch (PDOException $e)
    {
        echo "Connection failure with error code " . $e;
    }



    $Title = $_POST['Title'];
    $Bio = $_POST['Bio'];
    $Paragraph1 = $_POST['Paragraph1'];
    $Paragraph2 = $_POST['Paragraph2'];
    $HeaderPic = $_FILES['HeaderPic2']['name'];
    $Image1 = $_FILES['Image1']['name'];
    $Image2 = $_FILES['Image2']['name'];
    $Auteur = $_POST['Auteur'];


   

    $target1='../media/'.basename($_FILES['HeaderPic2']['name']);
    $target2='../media/'.basename($_FILES['Image1']['name']);
    $target3='../media/'.basename($_FILES['Image2']['name']);



    
    if(move_uploaded_file($_FILES['HeaderPic2']['tmp_name'],$target1) 
        && move_uploaded_file($_FILES['Image1']['tmp_name'],$target2)
        && move_uploaded_file($_FILES['Image2']['tmp_name'],$target3))
    {   
       
        $sql = $conn ->prepare ("INSERT INTO Blogs(Title,Bio,Paragraph1,Paragraph2,HeaderPic,Image1,Image2,Auteur)
                            VALUES (?,?,?,?,?,?,?,?)");

        $sql -> execute(array($Title,$Bio,$Paragraph1,$Paragraph2,$HeaderPic,$Image1,$Image2,$Auteur));
    }
    else
    {
        echo"Upload Failure try fucking again later";
        
    }


   


   
?>