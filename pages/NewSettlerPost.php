<?php

    $server = 'localhost';
    $username = 'username';
    $database = 'Courses';
    $password = 'password';

        if(isset($_POST['Email']))
        {
            

            try
            {
                $conn = new PDO("mysql:host=$server;dbname=$database",$username,$database);
                $conn -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                echo "Connected";

                $sql1 = $conn -> prepare("SELECT * FROM Emails WHERE Email=?");
                $sql1 -> execute(array($_POST['Email']));

                $data = $sql1 -> fetch();

                if(isset($data['Email']))
                {
                    header("Location:../index.php?kklhadflkjhadsf=82583");
                }
                else
                {
                    $sql = $conn -> prepare("INSERT INTO Emails(Email) VALUES(?)");
                    $sql -> execute(array($_POST['Email']));
                    header("Location:../index.php?kklhadflkjhadsf=1234");
                }



                
            }
            catch(PDOException $e)
            {
                echo "Connection failure with error code : " . $e;
            }

            
        }
        else
        {
            header("Location:../index.php");
        }







?>