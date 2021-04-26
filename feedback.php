<?php
if(isset($_POST["submit"])){
    echo empty($_POST['f_n']);
    echo empty($_POST['email']);
    echo empty($_POST['msg']);
    if(!empty($_POST['f_n']) && !empty($_POST['email']) && !empty($_POST['msg'])) {
        $nam=$_POST['f_n'];
        $em=$_POST['email'];
        $ms=$_POST['msg'];
        $ph=$_POST['phno'];
        $sit=$_POST['site'];
        $con=mysqli_connect('localhost','root','^_^iambatman') or die(mysql_error());
        mysqli_select_db($con, 'dashboard_user_registration') or die("cannot select DB");
        $sql="INSERT INTO feedback (name,message,phno,site,email) VALUES ('$nam','$ms','$ph','$sit','$em')";
        if(!mysqli_query($con,$sql))
        {
            echo 'Not inserted';
        }
        else{
            echo 'Inserted fedback into the database';
        }
    }
}
?>
<!doctype>
<html>
<head>
    <link rel="stylesheet" href="nav_bar.css" type="text/css"/>
    <link rel="stylesheet" href="footer.css" type="text/css"/>
    <style>
    #navbar {
        list-style-type: none;
        margin: 0;
        padding: 0;
        border-bottom: 1px solid #bec2cb;
        overflow: hidden;
        background-color: #121212;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    }

    #navbar_button #content {
      display: inline-block;
      color: #bec2cb;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
    }

    #navbar_button #content:hover{
      background-color: #3f3f3f;
      color: #bec2cb;
      transition-duration: 0.4s;
    }

    #navbar_button {
        border-right: 1px solid #bec2cb;
        border-left: 1px solid #bec2cb;
        float: left;
    }
body {
background: #f1f1f1;
}

.container {
max-width: 400px;
width: 100%;
margin: 0 auto;
position: relative;
}

#contact input[type="text"],
#contact input[type="email"],
#contact input[type="tel"],
#contact input[type="url"],
#contact textarea,
#contact input[type="submit"] {
}

#contact {
background: #F9F9F9;
padding: 25px;
margin: 150px 0;
box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}

#contact h3 {
display: block;
font-size: 30px;
font-weight: 300;
margin-bottom: 10px;
}

#contact h4 {
margin: 5px 0 15px;
display: block;
font-size: 13px;
font-weight: 400;
}

fieldset {
border: medium none !important;
margin: 0 0 10px;
min-width: 100%;
padding: 0;
width: 100%;
}

#contact input[type="text"],
#contact input[type="email"],
#contact input[type="tel"],
#contact input[type="url"],
#contact textarea {
width: 100%;
border: 1px solid #ccc;
background: #FFF;
margin: 0 0 5px;
padding: 10px;
}

#contact input[type="text"]:hover,
#contact input[type="email"]:hover,
#contact input[type="tel"]:hover,
#contact input[type="url"]:hover,
#contact textarea:hover {
-webkit-transition: border-color 0.3s ease-in-out;
-moz-transition: border-color 0.3s ease-in-out;
transition: border-color 0.3s ease-in-out;
border: 1px solid #aaa;
}

#contact textarea {
height: 100px;
max-width: 100%;
resize: none;
}

#contact input[type="submit"] {
cursor: pointer;
width: 100%;
border: none;
background: #121212;
color: #FFF;
margin: 0 0 5px;
padding: 10px;
font-size: 15px;
}

#contact input[type="submit"]:hover {
background: #424242;
-webkit-transition: background 0.3s ease-in-out;
-moz-transition: background 0.3s ease-in-out;
transition: background-color 0.3s ease-in-out;
}

#contact input[type="submit"]:active {
box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.5);
}

.copyright {
text-align: center;
}

#contact input:focus,
#contact textarea:focus {
outline: 0;
border: 1px solid #aaa;
}

::-webkit-input-placeholder {
color: #888;
}

:-moz-placeholder {
color: #888;
}

::-moz-placeholder {
color: #888;
}

:-ms-input-placeholder {
color: #888;
}
.dropdown:hover .dropbtn {
  background-color: #3f3f3f;
  color: white;
  transition-duration: 0.4s;
}

.dropbtn {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}
#navbar_button.dropdown {
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 12%;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}
#navbar_button {
    border-right: 1px solid #bbb;
    float: left;
}
.dropdown-content #drop {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content #drop:hover {
    background-color: #f1f1f1;
    transition-duration: 0.2s;}

.dropdown:hover .dropdown-content {
  display: block;
  left: 88%;
  transition-duration: 0.4s;
}
    </style>
</head>
<body>
    <ul id = "navbar">
        <li id = "navbar_button"><a id = "content" href="http://192.168.64.2/IWP J component/dashboard.php">Home</a></li>
        <li id = "navbar_button"><a id = "content" href="http://192.168.64.2/IWP J component/Simulator.php">Simulator</a></li>
        <li id = "navbar_button"><a id = "content" href="http://192.168.64.2/IWP J component/sentiment_analysis.php">Sentiment analysis</a></li>
        <li id = "navbar_button"><a id = "content" href="http://192.168.64.2/IWP J component/news.php">News</a></li>
        <li id = "navbar_button"><a id = "content" href="http://192.168.64.2/IWP J component/main_forum.php">Forum</a></li>
        <li style="float:right" class="dropdown" id = "navbar_button">
            <a class="dropbtn">More</a>
            <div class="dropdown-content">
                <a id = "drop" href="feedback.php">Feedback</a>
                <a id = "drop" href="iwp_about us.html">About us</a>
                <a id = "drop" href="iwp_logout.php">Log out</a>
            </div>
        </li>

    </ul>

    <div class="container">
  <form id="contact" action="feedback.php" method="POST">
    <h3>Feedback/Contact Form</h3>
    <h4>Contact us for any queries or requests</h4>
    <fieldset>
      <input placeholder="Your name" type="text" tabindex="1" required autofocus name="f_n">
    </fieldset>
    <fieldset>
      <input placeholder="Your Email Address" type="email" tabindex="2" name="email" required>
    </fieldset>
    <fieldset>
      <input placeholder="Your Phone Number (optional)" type="tel" tabindex="3" name="phno">
    </fieldset>
    <fieldset>
      <input placeholder="Your Web Site (optional)" type="url" tabindex="4" name="site">
    </fieldset>
    <fieldset>
      <textarea placeholder="Type your message here...." tabindex="5" required name="msg"></textarea>
    </fieldset>
    <fieldset>
      <input name="submit" type="submit" id="contact-submit">
    </fieldset>
  </form>
</div>
</body>
</html>
