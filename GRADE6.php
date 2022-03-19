﻿<?php
include_once 'database.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BrainMaster Teacher</title>

    <!--google fonts cdn link-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,700;0,800;1,300;1,600;1,700;1,800&display=swap" rel="stylesheet">

    <!--font awesome cdn link -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

    <!--custome css file link-->
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="table.css">

</head>
<body>
    <div class="container">
        <header>
            <!--header section start-->

            <div id="menu" class="fas fa-bars"></div>


            <a href="#" class="logo">Brain<span>Master</span></a>


            <nav class="navbar">
                <ul>
                    <li><a class="active" href="home.html">Home</a></li>

                    <li><a href="class.html">Class</a></li>
                    <li><a href="teacher.html">Teacher</a></li>
                    <li><a href="contactus.html">Contact Us</a></li>
                    <li><a href="review.html">Review</a></li>




                </ul>




            </nav>






            <!--header section close-->
        </header>


        <div id="body">
 <table width="80%" border="1">
    
    <tr>
    <th>File Name</th>
    <th>View</th>
    </tr>
    <?php
 $query="SELECT * FROM grade where grade = 'Grade 06'";
 $result_set=mysqli_query($conn,$query);
 while($row=mysqli_fetch_array($result_set))
 {
  ?>
        <tr>
        <td><?php echo $row['file'] ?></td>
        <td><a href="doc/<?php echo $row['file'] ?>" target="_blank">view file</a></td>
        </tr>
        <?php
 }
 ?>
    </table>
    
</div>

    </div>
    <!-- footer section-->
    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>About Us</h3>
                <p>hbhdjiajjbjjknsjckdnjnsdjkndj hyhuikopl;lk hbiujoisjcnsdhbsdh hbduhfjdn</p>
            </div>
            <div class="box">
                <h3>Quick Links</h3>
                <a href="#">Home</a>
                <a href="#">Class</a>
                <a href="#">Teacher</a>
                <a href="#">Contact Us</a>
                <a href="#">Review</a>
            </div>
            <div class="box">
                <h3>Follow Us</h3>
                <a href="#">facebook</a>
                <a href="#">twitter</a>
                <a href="#">instagram</a>
                <a href="#">linkdin</a>

            </div>
            <div class="box">
                <h3>Contact Us</h3>
                <p><i class="fas fa-phone"></i>+94743648952</p>
                <p><i class="fas fa-envelop"></i>brainmaster@gmail.com</p>
                <p><i class="fas fa-map-marker-alt"></i>Kuliyapitiya, Sri Lanka</p>

            </div>
            <div class="credit">Created By<span>The Fixers</span>| all right reserved</div>
        </div>
    </section>



    <!--jquery cdn link-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!--custom js file link-->
    <script src="script.js"></script>
</body>
</html>