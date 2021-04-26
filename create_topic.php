<?php
session_start();
if(!isset($_SESSION["sess_email"])){
    header("location: message.php");
} else {
    $name = $_SESSION['sess_name'];
}
?>

<head>
    <style>
    body{
        color: white;
        background-color: #121212;
    }
    #form_section{
        width:60%;
        margin: 50px auto 50px auto;
        padding: 30px;
        border: 1px #bec2cb solid;
        border-radius: 5px;
        /* box-shadow: 0px 8px 16px 0px #bec2cb; */
        -webkit-transition : box-shadow 1000ms ease-out;
        -moz-transition : box-shadow 1000ms ease-out;
        -o-transition : box-shadow 1000ms ease-out;
    }
    #form_section:hover{
        border : 1px solid #bec2cb;
        box-shadow: 0px 8px 16px 0px #bec2cb;
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
        border: 1px #bec2cb solid;
        border-radius: 5px;
        color: #121212;
        font-weight: bold;
        background-color: #bec2cb;
        padding: 10px;
    }
    #submit:hover{
        color:#bec2cb;
        background-color: #121212;
        transition-duration: 0.4s;
        box-shadow:0 4px 16px -3px #bec2cb;
    }
    #titles{
        width: 70%;
        text-align: center;
        border-bottom: 1px #bbb solid;
        margin: auto;
        padding: 10px;
    }
    #submit, #reset, #goback{
        width:20%;
        position: relative;
        margin: 0% 40% 0% 40%;
        border: 1px #bec2cb solid;
        border-radius: 5px;
        -webkit-transition : box-shadow 1000ms ease-out;
        -moz-transition : box-shadow 1000ms ease-out;
        -o-transition : box-shadow 1000ms ease-out;
        -webkit-transition : background-color 500ms ease-out;
        -moz-transition : background-color 500ms ease-out;
        -o-transition : background-color 500ms ease-out;
        padding: 10px;
        background-color: #bec2cb;
        color: #121212;
        font-weight: bold;
    }
    #submit:hover{
        border : 1px solid #bec2cb;
        background-color: #121212;
        box-shadow: 0px 8px 16px 0px #4ce600;
        color: #bec2cb;
    }
    #reset:hover, #goback:hover{
        border : 1px solid #bec2cb;
        background-color: #121212;
        box-shadow: 0px 8px 16px 0px #ff4c4c;
        color: #bec2cb;
    }


    .dropdown:hover .dropbtn {
      background-color: #3f3f3f;
      color: white;
      transition-duration: 0.4s;
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
    <div id="form_section">
        <div id="titles">
            <h1>Create New Topic</h1>
            <p>
                <i>Create a new thread and discuss with the other users to learn more about the virus and the pandemic.</i>
            </p>
        </div>
        <form id="form1" name="form1" method="post" action="add_topic.php">
            <div class="fields">
                <label>Topic: </label>
                <input name="topic" type="text" id="topic" size="50" /><span class="error"><br />
            </div>

            <div class="fields">
                <label>Detail: </label>
                <textarea name="detail" cols="50" rows="3" id="detail"></textarea><span class="error"><br />
            </div>

            <table width="100%" style="text-align: center;">
                <tr>
                    <td>
                        <input id="submit" type="submit" name="Submit" value="Submit" />
                    </td>
                    <td>
                        <input id="reset" type="reset" name="Submit2" value="Reset" />
                    </td>
                </tr>
            </table>
        </form>
    </div>
    <a href="main_forum.php"><button name="goback" id="goback">Back</button></a>
</body>







<!--





<table width="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<form id="form1" name="form1" method="post" action="add_topic.php">
<td>
<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
<tr>
<td colspan="3" bgcolor="#E6E6E6"><strong>Create New Topic</strong> </td>
</tr>
<tr>
<td width="14%"><strong>Topic</strong></td>
<td width="2%">:</td>
<td width="84%"><input name="topic" type="text" id="topic" size="50" /></td>
</tr>
<tr>
<td valign="top"><strong>Detail</strong></td>
<td valign="top">:</td>
<td><textarea name="detail" cols="50" rows="3" id="detail"></textarea></td>
</tr>
<tr>
<td><strong>Name</strong></td>
<td>:</td>
<td><input name="name" type="text" id="name" size="50" /></td>
</tr>
<tr>
<td><strong>Email</strong></td>
<td>:</td>
<td><input name="email" type="text" id="email" size="50" /></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td><input type="submit" name="Submit" value="Submit" /> <input type="reset" name="Submit2" value="Reset" /></td>
</tr>
</table>
</td>
</form>
</tr>
</table> -->
