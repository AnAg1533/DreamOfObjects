<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel='stylesheet' href='../css/BlogStyle.css'/>
    <link rel="icon" href="../media/Icon.png">

    <title>Hello, world!</title>
  </head>
  <body>
    

    <header class='container-fluid'>
        <h1>&lt;/DreamOfObjects.com&gt;</h1>
        <a href='../index.php'><img src='../media/HomeIcon.svg' class='Home'/></a>
    </header>



    <?php

        $server = 'localhost';
        $password = 'password';
        $username = 'username';
        $database = 'Courses';
        $data=null;
        try
        {
          $conn = new PDO("mysql:host=$server;dbname=$database",$username,$password);
          $conn -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
          echo "Connected";
        }
        catch(PDOException $e)
        {
          echo "Connection failure with error code ".$e;
        }

        $sql = $conn -> query("SELECT * FROM Blogs ORDER BY ID DESC");
    
    ?>

    <section class='Blog container'>
        <h1>What's New</h1>

        <?php 
        while($data = $sql->fetch())
        {
          ?>
        <div class='Card'>
        
        <img src='../media/<?php echo $data['HeaderPic']?>' class='CardImg'/>

        <div class='details'>
            
            <h1 class='Header'><?php echo $data['Title']?></h1>
            <p>
                <?php echo $data['Bio']?>
            </p>

            <a href='./FullArticle.php?Blog=<?php echo $data['ID']?>' class='LearnMoreButton'>LearnMore</a>
        </div>
        
        </div>
        <?php
        }
        ?>

    </section>

    
  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>