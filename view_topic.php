<?php
session_start();
if(!isset($_SESSION["sess_email"])){
    header("location: message.php");
} else {
    $name = $_SESSION['sess_name'];
    $email = $_SESSION['sess_email'];
}
?>
<?php

$host="localhost"; // Host name
$username="root"; // Mysql username
$password="^_^iambatman"; // Mysql password
$db_name="forum"; // Database name
$tbl_name="forum_question"; // Table name

// Connect to server and select databse.
$con = mysqli_connect("$host", "$username", "$password")or die("cannot connect");
mysqli_select_db($con,"$db_name")or die("cannot select DB");

// get value of id that sent from address bar
$id=$_GET['id'];

$sql="SELECT * FROM $tbl_name WHERE id='$id'";
$result=mysqli_query($con, $sql);

$rows=mysqli_fetch_array($result);
?>



<!doctype>
<html>
    <head>
        <link rel="stylesheet" href="iwpnav_bar.css" type="text/css"/>
        <style>
            #question{
                position: relative;
                border-collapse: collapse;
                width: 96%;
                padding: 20px;
                margin: auto;
                font-size: 16px;
                border-radius: 5px;
            }
            #response{
                position: relative;
                border: 1px solid #bec2cb;
                border-collapse: collapse;
                width: 96%;
                padding: 20px;
                margin: auto;
                font-size: 16px;
                border-radius: 5px;
            }
            #response table tr td{
                border-bottom: 1px solid #bec2cb;
                border-right: 11px solid #bec2cb;
            }
            #row_tr{
                -webkit-transition : background-color 200ms ease-out;
                -moz-transition : background-color 200ms ease-out;
                -o-transition : background-color 200ms ease-out;
            }
            #row_tr:hover{
                background-color: #3f3f3f;
            }
            #bor{
                border: 1px solid white;
                text-align: center;
            }
            #box{
                position : relative;
                width : 96%;
                margin: 10px auto 0px auto;
                padding: 10px;
                border: 1px #121212 solid;
            }
            #box_content{
                display:none;
                opacity: 0;
            }
            #box_content{
                animation: fadeInAnimation ease 3s;
                animation-delay: 2s;
                animation-iteration-count: 1;
                animation-fill-mode: forwards;
                color: white;
                display: block;
                text-align: center;
            }
            body {
                animation: fadeInAnimation ease 2.5s;
                animation-iteration-count: 1;
                animation-fill-mode: forwards;
            }
            @keyframes fadeInAnimation {
                0% {
                    opacity: 0;
                }
                100% {
                    opacity: 1;
                }
            }
            #your_bookings{
                position: relative;
                padding: 20px;
                margin: 20px ;
            }
            #boxed_table{
                border: 1px #bec2cb solid;
                border-radius: 5px;
            }
            #row_tr td{
                border: 1px solid #f9f9f9;
                padding: 5px;
            }
            #row_h{
                color: #121212;
                background-color: #bec2cb;
            }
            #create_new{
                width: 60%;
                border: 1px #bec2cb solid;
                border-radius: 5px;
                color: #121212;
                font-weight: bold;
                background-color: #bec2cb;
                padding: 10px;
                margin-top: 30px;
            }
            #create_new:hover{
                color:#bec2cb;
                background-color: #121212;
                transition-duration: 0.4s;
                box-shadow:0 4px 16px -3px #bec2cb;
            }
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
            body{
                background-color: #121212;
            }
            #titles{
                width: 70%;
                font-size: 28;
                border-bottom: 1px #bbb solid;
                margin: auto;
                padding: 0px;
            }
            #form_section{
                width:60%;
                margin: 50px auto 50px auto;
                padding: 30px;
                border: 1px #e0aa3e solid;
                border-radius: 5px;
                /* box-shadow: 0px 8px 16px 0px #e0aa3e; */
                -webkit-transition : box-shadow 1000ms ease-out;
                -moz-transition : box-shadow 1000ms ease-out;
                -o-transition : box-shadow 1000ms ease-out;
            }
            #form_section:hover{
                border : 1px solid #e0aa3e;
                box-shadow: 0px 8px 16px 0px #e0aa3e;
            }
            #titles{
                text-align: center;
                border-bottom: 1px #bbb solid;
            }
            .form_1{
                padding: 30px 0px 0px 0px;
            }
            .fields{
                padding: 10px;
                border-radius: 4px;
                background-color: #3f3f3f;
                margin: 5px;
            }
            #submit{
                width: 100%;
                border: 1px #e0aa3e solid;
                border-radius: 5px;
                color: #121212;
                font-weight: bold;
                background-color: #e0aa3e;
                padding: 10px;
            }
            #submit:hover{
                color:#e0aa3e;
                background-color: #121212;
                transition-duration: 0.4s;
                box-shadow:0 4px 16px -3px #e0aa3e;
            }
            #submit, #reset{
                width:20%;
                position: relative;
                margin: 0% 40% 0% 40%;
                border: 1px #e0aa3e solid;
                border-radius: 5px;
                /* box-shadow: 0px 8px 16px 0px #e0aa3e; */
                -webkit-transition : box-shadow 1000ms ease-out;
                -moz-transition : box-shadow 1000ms ease-out;
                -o-transition : box-shadow 1000ms ease-out;
                -webkit-transition : background-color 500ms ease-out;
                -moz-transition : background-color 500ms ease-out;
                -o-transition : background-color 500ms ease-out;
                padding: 10px;
                background-color: #e0aa3e;
                color: #121212;
                font-weight: bold;
            }
            #submit:hover{
                border : 1px solid #e0aa3e;
                background-color: #121212;
                box-shadow: 0px 8px 16px 0px #4ce600;
                color: #e0aa3e;
            }
            #reset:hover{
                border : 1px solid #e0aa3e;
                background-color: #121212;
                box-shadow: 0px 8px 16px 0px #ff4c4c;
                color: #e0aa3e;
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
    <body style="color:white;">

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

        <div id="box">
            <div id="box_content">
                <p>
                    <i>We promote healthy, civilised and healthy conversation between our users</i>
                </p>
                <h5>TOPIC:</h5>
            </div>
        </div>

    </body>
</html>


<table id="question">
<tr>
<td><table width="100%" border="0" cellpadding="3" cellspacing="1" bordercolor="1">
<tr>
<td id="titles"><strong><center>
    <? echo $rows['topic']; ?>
</center></strong></td>
</tr>

<tr>
<td style="font-size: 14;"><i><? echo $rows['detail']; ?></i></td>
</tr>

<tr>
<td style="font-size: 14; color: grey;"><strong>By :</strong> <? echo $rows['name']; ?> <br /><strong>Email : </strong><? echo $rows['email'];?></td>
</tr>

<tr>
<td style="font-size: 14; color: grey;"><strong>Date/time : </strong><? echo $rows['datetime']; ?></td>
</tr>
</table></td>
</tr>
</table>
<BR>

<?php

$tbl_name2="forum_answer"; // Switch to table "forum_answer"

$sql2="SELECT * FROM $tbl_name2 WHERE question_id='$id'";
$result2=mysqli_query($con, $sql2);

while($rows=mysqli_fetch_array($result2)){
?>
<div id="form_section" style="width:86%">
    <table id="response">
    <tr>
    <td><table width="100%" border="0" cellpadding="3" cellspacing="1">
    <tr>
    <td><strong>Response/answer no.</strong></td>
    <td>:</td>
    <td><? echo $rows['a_id']; ?></td>
    </tr>
    <tr>
    <td width="18%"><strong>Name</strong></td>
    <td width="5%">:</td>
    <td width="77%"><? echo $rows['a_name']; ?></td>
    </tr>
    <tr>
    <td><strong>Email</strong></td>
    <td>:</td>
    <td><? echo $rows['a_email']; ?></td>
    </tr>
    <tr>
    <td><strong>Answer</strong></td>
    <td>:</td>
    <td><? echo $rows['a_answer']; ?></td>
    </tr>
    <tr>
    <td><strong>Date/Time</strong></td>
    <td>:</td>
    <td><? echo $rows['a_datetime']; ?></td>
    </tr>
    </table></td>
    </tr>
    </table><br>
</div>




<?php
}

$sql3="SELECT view FROM $tbl_name WHERE id='$id'";
$result3=mysqli_query($con, $sql3);

$rows=mysqli_fetch_array($result3);
$view=$rows['view'];



// if have no counter value set counter = 1
if(empty($view)){
$view=1;
$sql4="INSERT INTO $tbl_name(view) VALUES('$view') WHERE id='$id'";
$result4=mysqli_query($con, $sql4);
}



// count more value
$addview=$view+1;
$sql5="update $tbl_name set view='$addview' WHERE id='$id'";
$result5=mysqli_query($con, $sql5);

mysqli_close($con);
?>


<BR>
<div id="form_section">
    <form name="form_1" method="post" action="add_answer.php">
        <h4><center>
            <i>Add your response here</i>
        </center></h4><hr />

        <div class="fields">
            <label>Response: </label>
            <textarea name="a_answer" cols="45" rows="3" id="a_answer"></textarea>
        </div>

        <div>
            <table>
                <tr>
                    <td><input name="id" type="hidden" value="<? echo $id; ?>"></td>
                </tr>
                    <table width="100%" style="text-align: center;">
                        <tr>
                            <td>
                                <input id="submit" type="submit" name="Submit" value="Submit">
                            </td>
                            <td>
                                <input id="reset" type="reset" name="Submit2" value="Reset">
                            </td>
                        </tr>
                    </table>
            </table>
        </div>
    </form>
</div>




<!--
<table width="100%" border="0" cellpadding="3" cellspacing="1">
<tr>
<td width="18%"><strong>Name</strong></td>
<td width="3%">:</td>
<td width="79%"></td>
</tr>
<tr>
<td><strong>Email</strong></td>
<td>:</td> -->
<!-- <td></td> -->
<!-- </tr>
<tr>
<td valign="top"><strong>Answer</strong></td>
<td valign="top">:</td>
<td></td>
</tr>
<tr>
<td>&nbsp;</td>
<td><input name="id" type="hidden" value="<? echo $id; ?>"></td>
<td><input type="submit" name="Submit" value="Submit"> <input type="reset" name="Submit2" value="Reset"></td>
</tr>
</table> -->
