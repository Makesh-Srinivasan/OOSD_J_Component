<?php
session_start();
if(!isset($_SESSION["sess_email"])){
    header("location: message.php");
} else {
    $name = $_SESSION['sess_name'];
}
?>
<!doctype>
<html>
    <head>
        <link rel="stylesheet" href="iwpnav_bar.css" type="text/css"/>
        <style>
            #user_booking{
                position: relative;
                border-collapse: collapse;
                margin: 30px;
                padding: 20px;
                width: 96%;
                font-size: 16px;
                border-radius: 5px;
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
                margin: 10px auto 10px auto;
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
                /* border: 1px #bec2cb solid; */
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

        <!-- <ul id = "navbar">
            <li id = "navbar_button"><a id = "content" href="dashboard.php">Home</a></li>
            <li id = "navbar_button"><a id = "content" href="Simulator.php">Simulator</a></li>
            <li id = "navbar_button"><a id = "content" href="Chat-bot.php">Chat-bot</a></li>
            <li id = "navbar_button"><a id = "content" href="main_forum.php">Experts forum</a></li>
            <li style="float:right" class="dropdown" id = "navbar_button">
                <a class="dropbtn">More</a>
                <div class="dropdown-content">
                    <a id = "drop" href="feedback.php">Feedback</a>
                    <a id = "drop" href="iwp_about us.html">About us</a>
                    <a id = "drop" href="iwp_logout.php">Log out</a>
                </div>
            </li>
        </ul> -->

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
                <h1>Hey, <?=$name?>! Welcome to discussion forum</h1>
                <p>
                    <i>Here you can read about what experts think about the pandemic and the lockdown implementations.</i>
                </p>
            </div>
        </div>

    </body>
</html>
<?php

$host="localhost"; // Host name
$username="root"; // Mysql username
$password="^_^iambatman"; // Mysql password
$db_name="forum"; // Database name
$tbl_name="forum_question"; // Table name

// Connect to server and select databse.
$con = mysqli_connect("$host", "$username", "$password")or die("cannot connect");
mysqli_select_db($con, "$db_name")or die("cannot select DB");

$sql="SELECT * FROM $tbl_name ORDER BY id DESC";
// OREDER BY id DESC is order result by descending

$result=mysqli_query($con, $sql);
?>
<div style="width:100%;" id="boxed_table">
<table id="user_booking">
<tr id="row_h">
<td width="6%" align="center"><strong>S.no</strong></td>
<td width="53%" align="center"><strong>Topic</strong></td>
<td width="15%" align="center"><strong>Views</strong></td>
<td width="13%" align="center"><strong>Replies</strong></td>
<td width="13%" align="center"><strong>Date/Time</strong></td>
</tr>

<?php


$coun = 0;
// Start looping table row
while($rows=mysqli_fetch_array($result)){
    $coun += 1;
?>
<tr id="row_tr">
<td><? echo $coun; ?></td>
<td><a style="color:white;" href="view_topic.php?id=<? echo $rows['id']; ?>"><? echo $rows['topic']; ?></a><BR></td>
<td align="center"><? echo $rows['view']; ?></td>
<td align="center"><? echo $rows['reply']; ?></td>
<td align="center"><? echo $rows['datetime']; ?></td>
</tr>

<?php
// Exit looping and close connection
}
mysqli_close($con);
?>

<tr>
<td colspan="5" align="center"><a href="create_topic.php"><button id="create_new"><strong>Create New Topic</strong></button> </a></td>
</tr>
<t><td colspan="5" align="center">
    <p><i style="font-size:12;">
        If you want to create any discussion thread, click this button to get started
    </i></p>
</td></t>

</table>
</div>
