<!DOCTYPE html>
<html>
    <head>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
		<link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="contactStyle.css">
        <title>
            Pinch of Flavours
        </title>
	<script language="javascript" type="text/javascript">
	  function validateForm()
	  {
	    var fname = document.forms["contactform"]["fname"]; 
	    if(fname.value == "")
	    {
		window.alert("Please do not leave the first name blank");
		fname.focus();
		return false;
	    }
	    else
	    {
		if(fname.value.includes(0)||fname.value.includes(1)||fname.value.includes(2)||fname.value.includes(3)||fname.value.includes(4)||fname.value.includes(5)||fname.value.includes(6)||fname.value.includes(7)||fname.value.includes(8)||fname.value.includes(9))
		{
			window.alert("Do not enter numbers in the first name field");
			fname.focus();
			return false;
		}
		
	    }

	    var lname = document.forms["contactform"]["lname"]; 
	    if(lname.value == "")
	    {
		window.alert("Please do not leave the last name blank");
		lname.focus();
		return false;
	    }
	    else
	    {
		if(lname.value.includes(0)||lname.value.includes(1)||lname.value.includes(2)||lname.value.includes(3)||lname.value.includes(4)||lname.value.includes(5)||lname.value.includes(6)||lname.value.includes(7)||lname.value.includes(8)||lname.value.includes(9))
		{
			window.alert("Do not enter numbers in the last name field");
			lname.focus();
			return false;
		}
		
	    }

	    var email = document.forms["contactform"]["email"]; 
	    if(email.value == "")
	    {
		window.alert("Please do not leave the email blank");
		email.focus();
		return false;
	    }
	    else
	    {
		if(!email.value.includes("@"))
		{
			window.alert("Enter a valid email id");
			email.focus();
			return false;
		}
		
	    }

	    var comment = document.forms["contactform"]["comments"]; 
	    if(comment.value == "")
	    {
		window.alert("Please do not leave the comments section blank");
		comment.focus();
		return false;
	    }

	    return true;
	  }

	</script>
    </head>
    <body>
		<div class="header">
            <div class="inner-header">
                <a href="#"><img src="logo.jpeg" width="100" height="30" alt="" style="float: left; padding: 15px;"></a>
                <div class="logo">
                    <a href="#">Pinch of Flavours</a>
                </div>
                <div class="header-button"><button type="button"><a href="reservetable.php"> Reserve a table </a></button></div>
                <div class="header-links"><a href="home.php#about">About Us</a></div>
                <div class="header-links"><a href="menu.php">Menu</a></div>
				<div class="header-links"><a href="home.php">Home</a></div>
            </div>
        </div>

	<div class="main-contact">
	
    	  <div class="contact-image">
	      <div class="contact-container">
	        <div class="contact-content">
		  <h1>WE ARE HAPPY TO HELP YOU AT :<h1>
		  <br><br><br>
		  <h3>Address: Pinch of Flavours, Shivajinagar, Pune, 411016<h3>
		  <h3>Phone: +91 90000 00000<h3>
		  <h3>E-Mail: pinchofflavours@gmail.com<h3>
	        </div>

	      <div class="contact-form">

		<form method="post" name="contactform" onsubmit="return validateForm()">

		  <h2>We would love to know your feedback!</h2>

		    <div class="inputbox">
		      <span><h4>First Name:</h4></span>
		      <input type="text" name="fname"/>
		    </div>

		    <div class="inputbox">
		      <span><h4>Last Name:</h4></span>
		      <input type="text" name="lname"/>
		    </div>

		    <div class="inputbox">
		      <span><h4>Email:</h4></span>
		      <textarea rows="1" cols="50" name="email"></textarea>
		    </div>

		    <div class="inputbox">
		      <span><h4>Comments/Suggestions:</h4></span>
		      <textarea rows="2" cols="50" name="comments"></textarea>
		    </div>

		      <p><input type="submit" value="Submit" name="Submit" style="background-color:#40ff00; border-color:#40ff00;"/></p>

			
		    <br><br>

		  </form>

	      </div>
   	      </div>
	  </div>
        </div>
	<footer>
            <div class="container">
            <center>
                <p>Copyright © Restaurant. All Rights Reserved | Contact Us: +91 90000 00000</p>
            </center>
            </div>
        </footer>

    </body>
</html>