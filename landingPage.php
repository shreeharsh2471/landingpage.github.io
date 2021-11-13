
<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<META name="verify-v1" content="BR6qpYfMTtFfbVaRl6mBRDy29X6yQ/lQfvJTeU1LAFQ="�/>
    <meta name="author" content="Ajay Mahajan"/>
    <META NAME="description" CONTENT="Wellness Seekers focuses on the overall Physical, Emotional and Mental well being of all of us in these times of high stress and anxiety. Understanding various ways in which we can alleviate these can lead us to a much more happier and balanced lifestyle."/>
    <link rel="image_src" href="images/twi_logo.png" />
	<Meta Name="keywords" content = "Wellness, Emotional, Environmental, Intellectual, Occupational, Physical, Social, Spiritual, Corporate Wellness, " /> 
	<!-- Mobile Specifics -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta name="HandheldFriendly" content="true"/>
	<meta name="MobileOptimized" content="320"/>   

	<meta property="og:url" content="http://www.sat.wellnessseekers.net/satmenu.html"/>
	<meta property="og:title" content="The Wellness SAT Toolkit"/>
	<meta property="og:site_name" content="8 Dimensions of Wellness"/>
	<meta property="og:description" content="8 Dimensions of Wellness focuses on the overall Physical, Emotional and Mental well being of all of us in these times of high stress and anxiety. Understanding various ways in which we can alleviate these can lead us to a much more happier and balanced lifestyle."/>
	<meta property="og:image" content="images/twi_logo.png"/>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <title>Wellness SAT Toolkit</title>
	
	<!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link href="css/carousal.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->         
    <link rel="shortcut icon" href="images/ico/favicon.ico">

	<link rel="apple-touch-icon" sizes="57x57" href="images/ico/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="images/ico/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/ico/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="images/ico/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/ico/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="images/ico/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="images/ico/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="images/ico/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="images/ico/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="images/ico/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="images/ico/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="images/ico/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="images/ico/favicon-16x16.png">
	<link rel="manifest" href="images/ico/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="images/ico/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
</head><!--/head-->


<style>
        * {
            box-sizing: border-box
        }

        body {
            
        }

        /* Style the tab */
        .tab {
            float: left;
            background-color: #192b3c;
            width: 30%;
            min-height: 180vh;
        }

        /* Style the buttons inside the tab */
        .tab button {
            display: block;
            background-color: inherit;
            color: white;
            padding: 22px 16px;
            width: 100%;
            border: none;
            outline: none;
            text-align: left;
            cursor: pointer;
            transition: 0.3s;
            font-size: 17px;
        }

        /* Change background color of buttons on hover */
        .tab button:hover {
            background-color: #4d6276;
        }

        /* Create an active/current "tab button" class */
        .tab button.active {
            background-color: #243e56;
        }

        /* Style the tab content */
        .tabcontent {
            float: left;
            padding: 0px 12px;
            width: 70%;
            border-left: none;
            height: 300px;
        }
         /* The message box is shown when the user clicks on the password field */
        #message {
        display:none;
        background: #f1f1f1;
        color: #000;
        position: relative;
        padding: 20px;
        margin-top: 10px;
        }

        #message p {
        padding: 5px 20px;
        font-size: 14px;
        }

        /* Add a green text color and a checkmark when the requirements are right */
        .valid {
        color: green;
        }

        .valid:before {
        position: relative;
        left: -15px;
        content: "✔";
        }

        /* Add a red text color and an "x" when the requirements are wrong */
        .invalid {
        color: red;
        }

        .invalid:before {
        position: relative;
        left: -15px;
        content: "✖";
        }
        body, html {
        height: 100%;
        margin: 0;
        background: rgb(255,255,255);
background: linear-gradient(90deg, rgba(255,255,255,1) 0%, rgba(232,205,205,1) 0%);
        /*background: rgb(255,158,83);
        background: linear-gradient(90deg, rgba(255,158,83,1) 20%, rgba(252,84,0,1) 51%, rgba(255,79,79,1) 100%);*/
        }
        .banner{
            
            height: 90%;
            background-image:url("banner.jpg");
            width: 100%;
            height: 200px;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
            padding-top:40%;
        }
        .heading1{
            position: absolute;
            top: 10%;
            left: 2em;
            right: 20em;
            font-size: 5vw;
            text-align: center;
        }
        .byline{
            position: relative;
            background-color: #EAF0F4;
            padding-bottom:4%;

        }
        .byliner{
            position: absolute;
            color:#434749;
            font-size: 1.7vw;
            left: 37%;
            padding-top: 1%;
            font-style: italic;
        }
        /*
        .dimbox8{
            position: relative;
            
        }
        .heading2{
            position: absolute;
            top: 5%;
            left: 0.1em;
            font-size: 4vw;
            text-align: center;
            color: black;
        }
        .line{
            margin-left:35em;
        }

    

        .vidbox{
            position: relative;
        }
        .vid{
            position: absolute;
            top: 30%;
            width: 80%;
            left: 1.5em;
            font-size: 4vw;
            text-align: center;
            color: black;
            height: 500px
        }

*/
.dimbox{
    padding-top:50%;
    background: rgb(233,169,169);
background: linear-gradient(90deg, rgba(233,169,169,1) 0%, rgba(233,113,113,1) 45%, rgba(239,168,168,1) 100%);
    position:relative;
    margin-top: 0.5%;
    margin-left: 1%;
    margin-right: 1%;
    border-radius: 1em;

}
.heading2{
    position:absolute;
    font-size: 4vw;
    top: 1%;
    color:#fff;
    display: inline-block;
    float: left;
    width: 50%;
    text-align: center;
}

.vl{
    position: absolute;
    top: 5%;
    left:50%;
    height: 90%;
    width: 1%;
    background-color: white;
    display: inline-block;
}
.vidbox{
    position: absolute;
    display: inline-block;
    float: right;
    width: 40%;
    top: 27%;
    right: 5%;
}

.dim{
    position: absolute;
    left: 30%;
    font-size: 2vw;
    color:#fff;
    top: 150%;
    text-align: left;
    line-height: 2em;
}
.cclm{
    background: rgb(255,204,204);
background: linear-gradient(90deg, rgba(255,204,204,1) 0%, rgba(238,147,147,1) 50%, rgba(255,204,204,1) 100%);
    margin-left: 15%;
    margin-right: 1%;
    padding-top: 10%;
    width: 70%;
    position: relative;
    margin-top: 0.5%;
    border-radius: 1em;
    

}
.heading3{
    position: absolute;
    text-align: center;
    color:#770807;
    top: 2%;
    left: 20%;
    font-size: 4vw;
}
h1{
    font-family: Open sans-serif ;
    font-style: bold;
}
table{
    
    text-align: center;
    width: 100%;
    margin:1%;

}
td{
    padding-left:4%;
    padding-right:4%;
    padding-bottom:6%;
    width: 30%;
    font-size: 1vw;
}
table th {
    color:#AC3E3C;
    padding: 1%;
    width: 20%;
}
th{
    color:#770807;
    
    font-size: 1.2vw;
    

}
tbody th:hover{
    color:#770807;
    font-size: 1.5vw;

}

.logo{
    vertical-align: middle;
    display: block;
}

.bonusbox{
    width: 57%;
    display: inline-block;
    margin-left: 1%;
    margin-right: 1%;
    margin-top: 0.5%;
    border-radius:1em;
    padding-top: 41%;
    position: relative;
    background: rgb(255,128,74);
background: linear-gradient(90deg, rgba(255,128,74,1) 0%, rgba(242,8,0,1) 100%, rgba(255,227,204,1) 100%);

}
.bonusbox1{
    font-family: Open, sans-serif;
    position: absolute;
    color:#000;
    top:1%;
    margin-right: 1%;
    padding-top: 1%;
    font-size: 4vw;
    left:1%;
}


.enrolln{
    width:40%;
    position: absolute;
    display: inline-block;
    background-color: #0E93EC;
    margin-top: 0.5%;
    border-radius: 1em;
    padding-top: 41%;
}
.enroll{
    position: absolute;
    font-family: Open, sans-serif;
    font-size: 4vw;
    padding-top: 1%;
    color: #fff;
    top: 2%;
    left: 1%;
}

li{
    font-size: 1.5vw;
    text-align: left;
    margin-left: 10%;
    line-height: 2em;
    padding-bottom: 10%;
}

.imgbox{
    
    margin-left: 7%;
    margin-top:3%;
}
.img1{
    margin-right:3%;
    height: 30%;
    width: 40%;
    

}
.img2{
    margin-left:3%;
  height: 30%;
    width: 40%;
   
}




    </style>


<body  class="homepage">

<section> 
<header>
    <nav style="background: rgb(255,255,255);
background: linear-gradient(90deg, rgba(255,255,255,1) 0%, rgba(232,205,205,1) 0%); /*rgb(255,158,83);
background: linear-gradient(90deg, rgba(255,158,83,1) 20%, rgba(252,84,0,1) 51%, rgba(255,79,79,1) 100%);*/">
        <img src="pg_logows.png" style="padding-top:1%;padding-left: 2%; padding-bottom: 1%;">
    </nav>
    </header>
<!-- Banner starts here   -->

    <div class="banner">
       <snap class="heading1">
        <snap style="color:#fff; font-size: 1.2em;">WELL</snap>NESS METR<snap style="color:#fff;font-size:1.2em;">ICS</snap>
        </snap>
        <snap style="font-size:2vw; font-style: italic; position: absolute;
            top: 12em;
            left: 1em;
            right: 27em;
            text-align: center;">Lorem ipsum dolor sit amet...</snap>
    </div>
</section>
<section>
    <div class="byline">
        <h3 class="byliner">lorem lorem lorem lorem lorem...</h3>
    </div>
</section>



<section>
    <dim>
        <dim class="imgbox">
        <img src="2.png" class="img1">
    
        <img src="3.png" class="img2">
    </dim>
    </dim>
</section>



<!-- Banner ends here   -->
<section>
    <div class="cclm">
        
        <div class="heading3">
        <h1>COURSE HIGHLIGHTS</h1>
        </div>
        <br>
        <div>
            <center>
    <table class="table1">
    <tr><th><center><img src="https://img.icons8.com/ios-filled/50/000000/teacher.png"/ class="logo"></center>FACULTY OF WELLNESS COACHES</th>
        <th><center><img src="https://img.icons8.com/ios-filled/50/000000/curriculum.png"/ class="logo"></center>UNIQUE CURRICULUM</th>
        <th><center><img src="https://img.icons8.com/ios-filled/50/000000/youtube-live.png"/ class="logo"></center>MONTHLY LIVE SESSIONS</th></tr> 
    <tr><td>Learn from the accomplished coaches who have vast experience and extensive and in-depth subject matter expertise.</td>
    <td>Enhance your overall knowledge with the highly-rated study material designed and developed by experts.</td>
    <td>Question & Answer time!! Any doubts or queries...it is a great opportunity to clear them all in these highly interactive monthly Webinar sessions.</td></tr>

    <tr><th><center><img src="https://img.icons8.com/ios-glyphs/50/000000/conference-call--v1.png"/ class="logo"></center>WELLNESS SEEKERS TRIBE</th>
       <th> <center><img src="https://img.icons8.com/ios-glyphs/50/000000/quiz.png"/ class="logo"></center>SELF ASSESSMENTS</th>
       <th> <center><img src="https://img.icons8.com/ios-filled/50/000000/video.png"/></center>VIDEO LECTURES</th></tr> 
    <tr><td>Learn from the accomplished coaches who have vast experience and extensive and in-depth subject matter expertise.</td>
    <td>Enhance your overall knowledge with the highly-rated study material designed and developed by experts.</td>
    <td>Question & Answer time!! Any doubts or queries...it is a great opportunity to clear them all in these highly interactive monthly Webinar sessions.</td></tr>

    <tr><th><center><img src="https://img.icons8.com/external-vitaliy-gorbachev-fill-vitaly-gorbachev/50/000000/external-test-back-to-school-vitaliy-gorbachev-fill-vitaly-gorbachev.png"/ class="logo"></center>SAT TOOL</th>
        <th><center><img src="https://img.icons8.com/ios-filled/50/000000/appointment-reminders--v1.png"/ class="logo"></center>ALERT & NOTIFICATION</th>
        <th><center><img src="https://img.icons8.com/ios-glyphs/50/000000/thumb-up--v1.png"/ class="logo"></center>TRUSTED CONTENT</th></tr> 
    <tr><td>Learn from the accomplished coaches who have vast experience and extensive and in-depth subject matter expertise.</td>
    <td>Enhance your overall knowledge with the highly-rated study material designed and developed by experts.</td>
    <td>Question & Answer time!! Any doubts or queries...it is a great opportunity to clear them all in these highly interactive monthly Webinar sessions.</td></tr>

    <tr><th>AFFORDABLE FEE STRUCTURE</th><th>BONUS OFFERS</th><th>LEARN ANYTIME ANYWHERE</th></tr> 
    <tr><td>Learn from the accomplished coaches who have vast experience and extensive and in-depth subject matter expertise.</td>
    <td>Enhance your overall knowledge with the highly-rated study material designed and developed by experts.</td>
    <td>Question & Answer time!! Any doubts or queries...it is a great opportunity to clear them all in these highly interactive monthly Webinar sessions.</td></tr>
    </table></center>
</div>
        
    </div>

    <div>
    </div>
</section>
       <!--<div class="boxes">
            <div class="box1">
                <h3>FACULTY OF WELLNESS COACHES</h3>
                <p>Learn from the accomplished coaches who have vast experience and extensive and in-depth subject matter expertise.</p>
            </div>
            <div class="box2">
                <h3>UNIQUE CURRICULUM</h3>
                <p>Enhance your overall knowledge with the highly-rated study material designed and developed by experts.</p>
            </div>
            <div class="box3">
                <h3>MONTHLY LIVE SESSIONS</h3>
                <p>Question & Answer time!! Any doubts or queries...it is a great opportunity to clear them all in these highly interactive monthly Webinar sessions.</p>
            </div>
        </div>
    -->
    



<section>
    <div class="dimbox">
        <div class="heading2"><h1><img src="https://img.icons8.com/external-wanicon-lineal-color-wanicon/64/000000/external-free-marketing-strategy-wanicon-lineal-color-wanicon.png"/><snap style="color: #000;font-size: 5vw">BONUS</snap>OFFERS</h1>
            <ul><img src="https://img.icons8.com/fluency/48/000000/get-cash.png"/ align="left"><li>Enhance your overall knowledge with the highly-rated study material designed and developed by experts.</li>
                <img src="https://img.icons8.com/fluency/48/000000/get-cash.png"/ align="left"><li>Question & Answer time!! Any doubts or queries...it is a great opportunity to clear them all in these highly interactive monthly Webinar sessions.</li>
                <img src="https://img.icons8.com/fluency/48/000000/get-cash.png"/ align="left"><li>Learn from the accomplished coaches who have vast experience and extensive and in-depth subject matter expertise.</li></ul>
                
        </div>


        <div class="vl"></div>
        <div class="vidbox"><video src="video.mp4" autoplay controls></div>
    </div>
</section>










<setion>
    <div class="bonusbox">
        <div class="bonusbox1"><h2><img src="https://img.icons8.com/external-vitaliy-gorbachev-fill-vitaly-gorbachev/60/000000/external-sale-cyber-monday-vitaliy-gorbachev-fill-vitaly-gorbachev.png"/>SALE</h2></div>

    
    </div>
    <div class="enrolln">
        <div class="enroll"><h2><img src="https://img.icons8.com/external-bearicons-glyph-bearicons/64/000000/external-Order-Now-miscellany-texts-and-badges-bearicons-glyph-bearicons.png"/>Enroll Now</h2></div>
    </div>

</setion>
















