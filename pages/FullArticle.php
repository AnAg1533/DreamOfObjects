<?php

        $servername='localhost';
        $database='Courses';
        $username='username';
        $password='password';

        try
        {
          $conn = new PDO("mysql:host=$servername;dbname=$database",$username,$password);
          $conn -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
          echo"Connected";
        }
        catch(PDOException $e)
        {
          echo "Connection failure with error code " . $e;
        }

        $sql = $conn -> prepare("SELECT * FROM Blogs WHERE ID=?");
        $sql -> execute(array($_GET['Blog']));

        $data = $sql -> fetch();

        echo $data['ID'];



?>

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
    <title>Hello, world!</title>
    <link rel="icon" href="../media/Icon.png">

  </head>
  <body>
    

    <header class='container-fluid'>
        <h1>&lt;/DreamOfObjects.com&gt;</h1>
        <a href='../index.php'><img src='../media/HomeIcon.svg' class='Home'/></a>
    </header>

    <section class='article container'>


    <h1 class='Header'>

      <?php echo $data['Title']?>
    
    </h1>

    <div class='Section1'>

    <article>
    
    <?php
      echo $data['Paragraph1'];
    ?>

    </article>

    <img class='ArticleIMG' src='../media/<?php echo $data['Image1']?>'/>
    
    
    </div>

    <div class='Section1'>

    <img class='ArticleIMG' src='../media/<?php echo $data['Image2']?>'/>
    <article>
    <?php

      echo $data['Paragraph2'];
    
    ?>
    </article>

    </div>
      
       <footer>Written By : <?php echo $data['Auteur']?></footer>

    </section>

    
  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>