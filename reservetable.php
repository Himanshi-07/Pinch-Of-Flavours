<!DOCTYPE html>
<html>
    <head>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="styleRT.css" />
        <title>
            Pinch of Flavours
        </title>
    </head>
    <body>
        <div class="header">
            <div class="inner-header">
                <a href="#"><img src="logo.jpeg" width="100" height="30" alt="" style="float: left; padding: 15px;"></a>
                <div class="logo">
                    <a href="#">Pinch of Flavours</a>
                </div>
                <div class="header-links"><a href="contact.php">Contact Us</a></div>
                <div class="header-links"><a href="home.php#about">About Us</a></div>
                <div class="header-links"><a href="menu.php">Menu</a></div>
                <div class="header-links"><a href="home.php">Home</a></div>
            </div>
        </div>
        <div class="content">
            <div class="banner-image">
                <center>
                <div class="inner-banner-image">
                    <div class="banner-content">
                        <h1 style="color:#e6ffff;">TABLE BOOKING FORM</h1>
                        <form  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                            <table cellspacing=10>
                            <tr><td colspan=3>Name :<td colspan=2> <input type="text" name="name" placeholder="eg.John" required></tr>
                            <tr><td colspan=3>Phone Number :<td colspan=2> <input type="text" name="phno" placeholder="eg.9xxxxxxxxx" required>
                            <?php
                                       if(isset($_GET['m1'])){
                                       echo $_GET['m1'];
                                       }
                                       ?>
                            </tr>
                            <tr><td colspan=3>Date :<td colspan=2> <input type="date" name="date" required></tr>
                            <tr><td colspan=3>Time :<td colspan=2> <input type="time" name="time" min="09:00" max="21:00" required></tr>
                            <tr><td colspan=3>Number of Adults :<td colspan=2> <input type="number" name="no_of_ad" min="1" value="1" required></tr>
                            <tr><td colspan=3>Number of Children :<td colspan=2> <input type="number" name="no_of_ch" min="0" value="0" required></tr>
                            <tr><td colspan=3>Preferred Table Size:<td colspan=2>
						                        <input type="radio" name="tabsz" required>2 Seater
						                        <input type="radio" name="tabsz">4 Seater
                                                <input type="radio" name="tabsz">6 Seater
                                                <input type="radio" name="tabsz">8 Seater
				            </tr>
                            <tr><td colspan=4><center><button type="Submit">Reserve A Table</center></tr>
                            </table>
                        </form>
                        <div class="confirm">
                        <?php
                            if($_SERVER["REQUEST_METHOD"] == "POST")
                            {
                                $phone=$_POST['phno'];
                                if(is_numeric($phone) && strlen($phone)==10)
                                {                                
                                echo "<h2>Booking Confirmed</h2>";
                                echo "<h3>Looking forward to see you soon !!</h3>";
                                }
                                else{
                                    $error = "<span class='confirm'> ! Enter valid input</span>";
                                    header("location:reservetable.php?m1=".$error);
                                }
                            }
                        ?>
                        </div>
                    </div>
                </div>
                </center>
            </div>
        </div>
        <footer>
            <div class="container">
            <center>
                <p>Copyright © Pinch of Flavours. All Rights Reserved | Contact Us: +91 90000 00000</p>
            </center>
            </div>
        </footer>
    </body>
</html>
