<?php

    session_start();

    $sql = null ;
    $data = null;
    $sql1 = null;
    $conn = null;

    if(isset($_SESSION['UserName']))
    {
        $servername='localhost';
        $username='username';
        $password='password';
        $database='Courses';


        try
        {
            $conn = new PDO("mysql:host=$servername;dbname=$database",$username,$password);
            $conn -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            echo "Connected";
        }
        catch(PDOException $e)
        {
            echo "Connection Failure with error code 404";
        }

        $sql = $conn->prepare("SELECT * FROM Member WHERE ID=?");
        $sql -> execute(array($_SESSION['UserId']));
        $data = $sql->fetch();

        $sql1 = $conn ->query ("SELECT * FROM Course ");
       
        

    }
    else
    {
       // header("Location:../index.php");
    }


    


    

    

    
    

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
    <link rel='stylesheet' href='../css/UserStyle.css'/>
    <link rel="icon" href="../media/Icon.png">

    <title>Hello, world!</title>
  </head>
  <body>
   
    <div class='Cover container'>
    </div>
    <?php

        $sql6 = $conn -> prepare("SELECT * FROM CoverImage WHERE MemberID=? ORDER BY ID DESC LIMIT 1");
        $sql6 -> execute(array($_SESSION['UserId']));
        

    
    ?>
    
    <?php
        while($data6 = $sql6->fetch())
        {
            ?>
            <style>
                .Cover
                {
                    background:url('../uploads/<?php echo $data6['Src'] ;?>');
                    background-size:100% 100%;
                    background-repeat:no-repeat;
                }
            </style>
        <?php
        }
        ?>
    
    
    <header class='Profile container'>
        <div>
            
        </div>
        <div>
            <h1 class='Name'><?php echo htmlSpecialChars($data['LastName']) . '   ' . htmlSpecialChars($data['Name']);?></h1>
        </div>
        <div class='OffDiv'>
            <a class='Logout' href='../index.php'><img src='../media/Off.svg' class='OffButton'></a>
        </div>
        
    </header>
    <nav class='container'>
        <div class='Logo'>
            <h1>&lt;/DreamOfObjects.com&gt;</h1>
        </div>
        <div class='Browse'> 
            <button class='Tab1 Selected'>PROFILE</button>
            <button href='#' class='Tab2'>COURSES</button>
            <button href='#' class='Tab3'>PROGRESS</button>
            <button href='#' class='Tab4'>MY RESUME</button>
        </div>
    </nav>
    <section class='Content container'>

        <article class='ProfileArticle'>
                    <div class='data1'>
                        <table>
                            <tr>
                                <td class='Icon'><img src='../media/person.svg'/></td>
                                <td>Name</td>
                                <td>:</td>
                                <td><?php echo $data['Name'] ?> </td>
                            </tr>
                            <tr>
                                <td class='Icon'><img src='../media/person.svg'/></td>
                                <td>Last Name</td>
                                <td>:</td>
                                <td><?php echo $data['LastName'] ?></td>
                            </tr>
                            <tr>
                                <td class='Icon'><img src='../media/email.svg'/></td>
                                <td>Email</td>
                                <td>:</td>
                                <td><?php echo $data['Email'] ?></td>
                            </tr>
                            <tr>
                                <td class='Icon'><img src='../media/Home.svg'/></td>
                                <td>Home Adress</td>
                                <td>:</td>
                                <td><?php echo $data['Adress'] ?></td>
                            </tr>
                            <tr>
                                <td class='Icon'><img src='../media/Van.svg'/></td>
                                <td>Postal Code</td>
                                <td>:</td>
                                <td><?php echo $data['PostalCode'] ?></td>
                            </tr>
                            <tr>
                                <td class='Icon'><img src='../media/call.svg'/></td>
                                <td>Phone</td>
                                <td>:</td>
                                <td><?php echo $data['Phone'] ?></td>
                            </tr>
                            <tr>
                                <td class='Icon'><img src='../media/lock.svg'/></td>
                                <td>Password</td>
                                <td>:</td>
                                <td>**********</td>
                            </tr>
                            <tr>
                                <td class='Icon'><img src='../media/fb.svg'/></td>
                                <td>Facebook</td>
                                <td>:</td>
                                <td><?php echo $data['Facebook']?></td>
                            </tr>
                            <tr>
                                <td class='Icon'><img src='../media/instagram.svg'/></td>
                                <td>Instagram</td>
                                <td>:</td>
                                <td><?php echo $data['Instagram']?></td>
                            </tr>
                            <tr>
                                <td class='Icon'><img src='../media/twitter.svg'/></td>
                                <td>Twitter</td>
                                <td>:</td>
                                <td><?php echo $data['Twitter']?></td>
                            </tr>
                        </table>

                        <div style='margin-top:50px;'class='EditDiv d-flex justify-content-center align-items-center'>
                            <img src='../media/penwhite.svg' style='height:80px;width:80px; padding:15px;'/>
                            <a href='#'>Edit Information</a>
                        </div>
                    </div>

                    <div class='data2'>
                       <div class='filter'>
                           <section class='Filters'>
                                <form action='ob1.php'>
                                <div class='SearchDiv'>
                                    <input type='search' placeholder='search' class='Search'/>
                                    <img src='../media/search.svg' class='S1  SearchButton'/>
                                </div>
                                <input type='submit' class='Sub1' style='display:none;'/>
                                </form>

                                <div class='Category'>
                                <form action='ob1.php'>
                                    <select class='CatFilt'>
                                        <option>
                                        -- All --
                                        </option>
                                        <option>
                                            Technology
                                        </option>
                                        <option>
                                            Ecommerce
                                        </option>
                                        <option>
                                            Operating System
                                        </option>
                                        <option>
                                            Design
                                        </option>
                                        <option>
                                            Started
                                        </option>
                                        <option>
                                            Finished
                                        </option>

                                    </select>
                                    <input type='Submit' class='Sub2' style='display:none;'/>
                                </form>
                                <script src='../javascripts/Filter2.js'></script>
                                </div>
                            </section>
                            <section class='Courses'>

                            <div class='Cardio'>
                                    
                                
                            </div>

                            <?php
                                while($data1 = $sql1 -> fetch())
                                {
                            ?>
                                
                                <div class='Card'>
                                    <img src='../media/<?php echo $data1["CoverImage"] ?>'/>
                                    <div class='Details'>

                                        <h1>Name : <?php echo $data1["Name"] ?></h1>
                                        <h1>Description : <?php echo $data1["Description"]?></h1>
                                        <h1>Category : <?php echo $data1["Category"]?></h1>
                                        <h1>Price : <?php echo $data1["Price"]?></h1>

                                        <a href='./<?php echo $data1["Link"]?>'>GET STARTED</a>
                                    
                                    </div>
                                
                                </div>
                            <?php
                            
                                };
                            
                            ?>


                            </section>
                       </div>
                    </div>
                    <div class='data3'>
                       <table>
                            <tr class='Prog'>
                                <td>&lt;/DreamOfObjects.com&gt;</td>
                            </tr>
                            <tr class='Prog'>
                                <td>Course</td>
                                <td>Started At</td>
                                <td>Finished at</td>
                            </tr>

                            <?php

                                    $sql3 = $conn -> prepare("SELECT Lesson.ID AS LessonID, Course.Name AS CourseName
                                      ,Lesson.Finished AS LessonEnd , Lesson.Started AS LessonDebut FROM Course,Lesson 
                                      WHERE MemberID=? AND Course.Id=Lesson.CourseID");
                                    
                                    $sql3 -> execute(array($_SESSION['UserId']));

                                    while( $data8 = $sql3 -> fetch())
                                    {

                                        
                            ?>

                                        
                            <tr class='Prog2'>
                                <td><?php echo $data8['CourseName']?></td>
                                <td><?php echo $data8['LessonDebut']?></td>
                                <td><?php echo $data8['LessonEnd']?></td>
                            </tr>

                            <?php
                            
                                    };            

                            ?>

                            
                            
                       </table>
                    </div>
                    <div class='data4'>
                    <br/><br/>
                        <h3>Fill the following forms to render a resume</h3>
                        <br/><br/>
                        <form method='Post'>
                        <div style='width:570px'class='d-flex justify-content-center'><h3>History</h3></div>
                            <div><textarea placeholder='Help the employer to get to know you'></textarea></div>
                            <div><h3>Work History</h3></div>
                            <div><input type='text' placeholder='Experience N:01'/> <input type='number' placeholder='Years'/></div>
                            <div><input type='text' placeholder='Experience N:02'/> <input type='number' placeholder='Years'/></div>
                            <div><input type='text' placeholder='Experience N:03'/> <input type='number' placeholder='Years'/></div>

                            <div><h3>Education</h3></div>
                            <div><input type='text' class='Text2'  placeholder='Education 1'></div>
                            <div><input type='text' class='Text2'  placeholder='Education 3'></div>
                            <div><input type='text' class='Text2'  placeholder='Education 2'></div>


                            <div><input type='submit' value='Render' class='SubButt'/></div>  
                        </form>
                    </div>

        </article>
        <article class='CoursesArticle'>

        </article>
        <article class='BrowseArticle'>
            
        </article>
    </section>
    
    <?php

        $sql5 = $conn -> prepare("SELECT * FROM ProfileImage WHERE MemberID=? ORDER BY ID DESC LIMIT 1");
        $sql5 -> execute(array($_SESSION['UserId']));
        
        while($data5 = $sql5->fetch())
        {
            echo "<img src='../uploads/" . $data5['Src'] . "' class='ProfilePic'>";
        }
    
    ?>
    
    
    </div>
    <img src='../media/Cam.svg' style='height:50px; width:50px;' class='ProfileCam'/>
    <img src='../media/Cam.svg' style='height:30px; width:30px;' class='CoverCam'/>
    <script src='../javascripts/Tab.js'></script>
    <script src='../javascripts/ProfilePicScript.js'></script>







    <div class='ImageUpload'>



        <div class='CloseButton'><img src='../media/CloseBlack.svg'></div>
        
        <form method='POST' action='./ImageUpload.php' enctype='multipart/form-data'>
        
            <div class='UploadFileSection'>
                <h3>Upload Profile picture</h3>
                <input type='file' name='ProfileUpload'/>
                <input type='submit' value='upload' name='Submit' class='UpButton'/>
            </div>
        
        </form>
        
    </div>

    <script src='../javascripts/UploadImg.js'></script>

    <?php


        if(isset($_GET['Upload']))
        {
            if($_GET['Upload']=='ldsjfsmakjshdfa')
        {
            echo 
            "

            <script>
                alert('You need to choose an image');
            </script>

            ";
        }

        }    
    
    ?>
    


    <div class='ImageUpload2'>



        <div class='CloseButton2'><img src='../media/CloseBlack.svg'></div>
        
        <form method='POST' action='./ImageUpload2.php' enctype='multipart/form-data'>
        
            <div class='UploadFileSection'>
                <h3>Upload Cover here</h3>
                <input type='file' name='ProfileUpload2'/>
                <input type='submit' value='upload' name='Submit' class='UpButton'/>
            </div>
        
        </form>
        
    </div>

    <script src='../javascripts/UploadImg2.js'>
    </script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>