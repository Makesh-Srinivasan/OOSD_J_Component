<?php
session_start();
?>
<!doctype>
<html>
    <head>
        <style>
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




            #box{
                position : relative;
                width : 70%;
                margin: 50px auto 50px auto;
                padding: 30px;
                border: 1px #bec2cb solid;
                border-radius: 5px;
                /* box-shadow: 0px 8px 16px 0px #bec2cb; */
                -webkit-transition : box-shadow 300ms ease-out;
                -moz-transition : box-shadow 300ms ease-out;
                -o-transition : box-shadow 300ms ease-out;
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
                animation: fadeInAnimation ease 2s;
                animation-delay: 0s;
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
            .redirect{
                width: 60%;
                border: 1px #bec2cb solid;
                border-radius: 5px;
                color: #121212;
                font-weight: bold;
                background-color: #bec2cb;
                padding: 10px;
                margin-top: 30px;
            }
            .redirect:hover{
                color:#bec2cb;
                background-color: #121212;
                transition-duration: 0.4s;
                box-shadow:0 4px 16px -3px #bec2cb;
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
                <h1>Register or sign-in to use this feature!</h1>
                <p>
                    <i>Here you can read about what experts think about the pandemic and the lockdown implementations.</i>
                </p>
            </div>
            <br /><br /><hr /><br />
            <table width="100%" style="text-align: center;">
                <tr>
                    <td>
                        <a href="iwp_login.php"><button class="redirect">Sign-in</button></a>
                    </td>
                    <td>
                        <a href="iwp_register.php"><button class="redirect">Register</button></a>
                    </td>
                </tr>
            </table>
        </div>

    </body>
</html>
