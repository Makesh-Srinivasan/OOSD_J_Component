<?php
session_start();
if(!isset($_SESSION["sess_user"])){
    header("location:iwp_login.php");
} else {
?>
<!doctype html>
<html>
<head>
    <title>Welcome page</title>
    <link rel="stylesheet" href="nav_bar.css" type="text/css"/>
    <link rel="stylesheet" href="footer.css" type="text/css"/>

    <style>
        .module{
            width: 500px;
            height: 600px;
            text-align: center;
            margin:auto;
            box-shadow: 8px 8px 16px 8px rgba(0,0,0,0.2);
            border-radius: 5px;
        }
        table{
            padding:10px;
            border: 0px solid black;
        }
        #contentsq{
            padding-top: 20px;
            margin:auto;
            font-family: monospace;
            color: white;
            width:64%;
            font-size: 16px;
            text-align: center;
            border: 0px black solid;
            width: 98%;
            box-shadow: 8px 8px 16px 8px rgba(0,0,0,0.2);
            background-color: #121212;
            border-radius: 6px;
        }
        #hi{
            color: white;
            position: absolute;
            top:67%;
            left:28%;
            font-size: 20px;
            font-family: monospace;
            font-weight: bold;
        }
        .darksq{
            width:88%;
            margin:5%;
            height:500px;
            position:absolute;
            background-color: #121212;
            border-radius: 6px;
            box-shadow: 8px 8px 16px 8px rgba(0,0,0,0.2);
            padding:10px;
        }
        h1{
            text-align: center;
            color:white;
            padding-top: 100px;
            font-size: 60px;
            font-family:inherit;
        }

        body{
            margin:0px;
        }
        .box-circle-transform{
          margin:auto;
          width:200px;
          background-color: #121212;
          outline: 1px solid transparent;

          position: absolute;
          top: 60%;
          left:24%;
        }
        #square{
            position: absolute;
            top:100%;
            width:99%;
        }
        img{
            width:100%;
        }
        .boxed{
            margin:5px;
            padding: 5px;
            box-shadow: 8px 8px 16px 8px rgba(0,0,0,0.2);
            border-radius:4px;
        }
    </style>


    </head>
<body>
<!-- <h2>Welcome, <?=$_SESSION['sess_user'];?>!</h2> -->
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

<div class = "darksq">
    <h1>Welcome, <?=$_SESSION['sess_name'];?>!</h1>
</div>
<img src="images/newl.png" class="box-circle-transform">

<img src="vit logo.png" style="position: absolute; top:67%; left:59%; width:250px;"/>

<div id = "square">
    <h2><center>
        Analysis of the pandemic
    </center></h2>
    <div id = "contentsq">

    <table>
        <tr style="width:1000px;">
            <td class="boxed" style="width:1198px; font-size:16px; border:1px white solid;">
                <div style="padding:20px;">
                    <p>
                        The sentiment analysis graph
                    </p>
                    <div>

                    </div>
                </div>
            </td>
        </tr>
    </table>

    <table>
        <tr style="width:1000px;">
            <td class="boxed" style="width:600px; font-size:16px; border:1px white solid;">
                <div style="padding:20px;">
                    <p id="heading">
                        Demographics bubble
                    </p>
                    <div>
                        <iframe class="module" src="test1.html" title="Total cases heat map for India">
                        </iframe>
                    </div>
                </div>
            </td>
            <td class="boxed" style="width:600px; font-size:16px; border:1px white solid;">
                <div style="padding:20px;">
                    <p id="heading">
                        Demographics Heat-map
                    </p>
                    <div>
                        <iframe class="module" src="TimeSliderChoropleth.html" title="Total cases heat map for India">
                        </iframe>
                    </div>
                </div>
            </td>
        </tr>
    </table>

    <table>
        <tr style="width:1000px;">
            <td class="boxed" style="width:1198px; font-size:16px; border:1px white solid;">
                <div style="padding:20px;">
                    <p>
                        Trends curve
                    </p>
                    <div>
                        <iframe style="width:75%;" class="module" src="Trend.html" title="Total cases heat map for India">
                        </iframe>
                    </div>
                </div>
            </td>
        </tr>
    </table><br />
    </div>
    <br /><br />
    <footer>
        <div style="width:100%; height:200px; background-color: #121212; margin-top:30px; padding-top: 30px;">
            <table style="color:white;">
                <tr>
                    <td width=700px style=" border-right: 1px white solid; padding:10px;">
                        <p>We are students are fit chennai and we developed this website to help you look at the pandemic from a whole new perspective, through the lens of data analysis and data visualisation. As a part of the courseware in Internet and Web Programming, we created this highly interactive and a very useful tool for the citizens of India. </p>

                        <p>
                            Database:
                            <a id="ali">API</a>
                        </p>
                    </td>
                    <td width=300px style=" border-right: 1px white solid; padding:10px;">
                        <ul>
                            <p>
                                contact us
                            </p>
                            <button id="but_contact_foot"><a style="text-decoration:none; color:black; font-family:sans; " href = "iwp_about us.html">Contact us</a></button>
                        </ul>
                    </td>
                    <td width=150px style=" border-right: 1px white solid; padding:10px;">
                        <ul id = "navbar">
                            <li><a id="ali" href="iwp_member.php">Home</a></li>
                            <li><a id="ali"  href="Simulator.php">Simulator</a></li>
                            <li><a id="ali"  href="Chat-bot.php">Chat-bot</a></li>
                            <li><a id="ali"  href="Forum.php">Experts forum</a></li>
                            <li>
                                <a>More: </a>
                                <div>
                                    <a id="ali"  href="feedback.html">Feedback</a><br />
                                    <a id="ali"  href="iwp_about us.html">About us</a><br />
                                    <a id="ali"  href="iwp_logout.php">Log out</a><br />
                                </div>
                            </li>
                        </ul>
                    </td>
                </tr>
            </table>
        </div>
    </footer>
</div>
</body>
</html>
<?php
}
?>
