<?php
session_start();
if(!isset($_SESSION["sess_email"])){
    $name = "";
} else {
    $name = $_SESSION['sess_name'];
}
?>
<!doctype>
<html>
    <head>
        <link rel="stylesheet" href="jnav_bar.css" type="text/css"/>
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
            body{
                background-color: #121212;
            }

            #user_booking{
                position: absolute;
                /* float: right; */
                top: 56%;
                margin: 30px;
                right: 22%;
                padding: 20px;
                width: 50%;
                border: 1px #bec2cb solid;
                font-size: 16px;
                border-radius: 5px;
            }
            #bor{
                border: 1px solid white;
                border-radius: 1px;
                text-align: center;
            }
            #box{
                position : relative;
                width : 70%;
                margin: 50px auto 50px auto;
                padding: 30px;
                border: 1px #bec2cb solid;
                border-radius: 5px;
                /* box-shadow: 0px 8px 16px 0px #bec2cb; */
                -webkit-transition : box-shadow 1000ms ease-out;
                -moz-transition : box-shadow 1000ms ease-out;
                -o-transition : box-shadow 1000ms ease-out;
            }
            #box_content{
                display:none;
                opacity: 0;
            }
            #box:hover{
                border : 1px solid #bec2cb;
                box-shadow: 0px 8px 16px 0px #bec2cb;
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
            #modules_t{
                width: 96%;
                padding: 10px;
                margin: auto;
            }

            .module{
                width: 90%;
                height: 600px;
                border-radius: 5px;
                border: 1px solid #121212;
                -webkit-transition : box-shadow 1000ms ease-out;
                -moz-transition : box-shadow 1000ms ease-out;
                -o-transition : box-shadow 1000ms ease-out;
                margin: 10px;
            }

            #table_td{
                margin: auto;
                padding: 10px;
                text-align: center;
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
                <h1>Welcome to the COVID-19 data visualisation and analysis tool <?=$name;?></h1>
                <p>
                    <i>Learn about the current situation in your state or your country! Interact with experts and people from all over your state</i>
                </p>
            </div>
        </div>
        <table id="modules_t">
            <tr>
                <td colspan="2" id="table_td">
                    <h3>
                        Daily cases
                    </h3>
                    <iframe class="module" src="https://ourworldindata.org/coronavirus-data-explorer?hideControls=true&amp;zoomToSelection=true&amp;casesMetric=true&amp;dailyFreq=true&amp;smoothing=0&amp;country=~OWID_WRL" style="width: 100%; height: 600px;"></iframe>
                </td>
            </tr>
            <tr>
                <td colspan="2" id="table_td">
                    <h3>
                        Cumulative cases
                    </h3>
                    <iframe class="module" src="https://ourworldindata.org/grapher/total-cases-covid-19?tab=map&region=Africa" width="100%" height="600px"></iframe>
                </td>
            </tr>
            <tr>
                <td colspan="2" id="table_td">
                    <h3>
                        Trends
                    </h3>
                    <iframe class="module" src="Trend.html" title="Trends curve state of india"></iframe>
                </td>
            </tr>
            <tr>
                <td id="table_td">
                    <h3>
                        Bubble Demographics map
                    </h3>
                    <iframe class="module" src="test1.html" title="Total cases heat map for India">
                    </iframe>
                </td>
                <td id="table_td">
                    <h3>
                        Heat map
                    </h3>
                    <iframe class="module" src="TimeSliderChoropleth.html" title="Total cases Bubble Demographics map map for India">
                    </iframe>
                </td>
            </tr>
            <!-- <tr>
                <td id="table_td" colspan="2">
                    <h3>
                        Dataset
                    </h3>
                </td>
            </tr> -->
        </table>

        <footer style="border-top: 1px solid #e0aa3e;">
            <div style="width:100%; height:200px; background-color: #121212; margin-top:30px; padding-top: 30px;">
                <table style="color:white;">
                    <tr>
                        <td width=700px style=" border-right: 1px #e0aa3e solid; padding:10px;">
                            <p>We are students of VIT chennai and we developed this website to help you look at the pandemic from a whole new perspective, through the lens of data analysis and data visualisation. As a part of the Object Oriented Software Design course, we created this highly interactive and a very useful tool for the citizens of India. </p>

                            <p>
                                Database:
                                <a id="ali">API</a>
                            </p>
                        </td>
                        <td width=300px style=" border-right: 1px #e0aa3e solid; padding:10px;">
                            <ul>
                                <p>
                                    contact us
                                </p>
                                <button id="but_contact_foot"><a style="text-decoration:none; color:black; font-family:sans; " href = "iwp_about us.html">Contact us</a></button>
                            </ul>
                        </td>
                        <td width=150px style=" border-right: 1px white solid; padding:10px;">

                            <ul id = "navbar">
                                <li><a id = "ali" href="http://192.168.64.2/IWP J component/dashboard.php">Home</a></li>
                                <li><a id = "ali" href="http://192.168.64.2/IWP J component/Simulator.php">Simulator</a></li>
                                <li><a id = "ali" href="http://192.168.64.2/IWP J component/sentiment_analysis.php">Sentiment analysis</a></li>
                                <li><a id = "ali" href="http://192.168.64.2/IWP J component/news.php">News</a></li>
                                <li><a id = "ali" href="http://192.168.64.2/IWP J component/main_forum.php">Forum</a></li>
                                <li>
                                    <a>More</a>
                                    <div>
                                        <a id = "ali" href="feedback.php">Feedback</a>
                                        <a id = "ali" href="iwp_about us.html">About us</a>
                                        <a id = "ali" href="iwp_logout.php">Log out</a>
                                    </div>
                                </li>

                            </ul>
                        </td>
                    </tr>
                </table>
            </div>
        </footer>
    </body>
</html>
