<?php

        $servername = "localhost";
        $username = "username";
        $password = "password";
        $database = "Courses";


        try
        {
            $conn = new PDO("mysql:host=$servername;dbname=$database",$username,$password);
            $conn -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            //echo "Connected";
        }
        catch(PDOException $e)
        {
            echo "Connection failure with error code " . $e;
        }

        $sql = $conn -> query("SELECT * FROM Course ORDER BY Id LIMIT 0,10");



?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Browse</title>

    <link rel="stylesheet" href="../css/BrowseStyle.css"/>
    <link rel="icon" href="../media/Icon.png">

  </head>
  <body>
    <header class='container-fluid'>

        <h1>&lt;/DreamOfObjects.com&gt;</h1>

        <div class='Home'>
            <a href='../index.php'><img class='Icon1' src='../media/HomeIcon.svg'></a>
        </div>
        
    </header>


    <section class='FiltersSection'>
        <article class='Forms'>
        <form class='CategoryFilter'>

            <div>
                    <select>
                        <option>
                            All
                        </option>
                        <option>
                            Technology and Design
                        </option>
                        <option>
                            Ecommerce
                        </option>
                        <option>
                            Design
                        </option>
                    </select>

                    <select>
                        <option>
                            Free
                        </option>
                        <option>
                            Premium
                        </option>
                    </select>


                    <input type='submit' value='FILTER' class='Filter'/>
        
            </div>
        
        </form>
        <form class='CategoryFilter2' action='Ob.php'>

            <div>
                <input type='search' placeholder='Search' class='SearchBar'/>
                <img src='../media/search.svg' class='SearchButton'/>
                <input type='Submit' value='Search' class='Sub1'/>
            </div>
        
        </form>

        <script src='../javascripts/Filter1.js'></script>
    
    </article>


    </section>



    <section class='container-fluid Main'>
        <article class='BrowseSection'>


        <?php

            while($data = $sql -> fetch())
            {
               
           
        ?>
        <div class='Card1'>

        <img style='border:solid black;'src='../media/<?php echo $data["CoverImage"];?>' id="IMG"/>

            
            <div class='Information'>
                    <h3>Title : <?php echo $data['Name']; ?></h3>
                    <h3>Description : <?php echo $data['Description']; ?></h3>
                    <h3>Price : <?php echo $data['Price']; ?></h3>
                    <a class='Start'href="./<?php echo $data['Link']; ?>">GET STARTED</a>
            </div>

        </div>

            <?php } ?>
    
        </article>
    </section>




    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>