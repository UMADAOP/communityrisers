<!DOCTYPE HTML>
<html>
<head>
    <title>Children's Day 2018</title>
    <style>

        .container {
            padding-left: 20px;
            padding-right: 20px;
            margin: auto;
        }

        .form-group {
            padding: 10px 0px;
        }

        input[type="file"] {
            border: 1px solid #222;
            padding: 20px 0px;
            -webkit-box-shadow: 0 0 10px rgba(0,0,0,0.5);
            box-shadow: 0 0 10px rgba(0,0,0,0.5);
        }

        .error {
            width: 300px;
            display: block;
            padding: 10px 10px;
            background: red;
            color: #fff;
            text-align: center;
        }

        .img-res {
            width: 25%;
            height: 200px;
            -webkit-box-shadow: 0 0 15px rgba(0,0,0,0.5);
            box-shadow: 0 0 15px rgba(0,0,0,0.5);
            margin: 10px 10px;
            -webkit-border-radius: 6px;
            -moz-border-radius: 6px;
            border-radius: 6px;
        }

        #particles-js {
            background: #3C67C1;
            height: 100%;
            width: 100%;
        }

        .jar {
            position: relative;
        }

        #star1 {
            position: absolute;
            top: 30px;
            left: 50px;
            width: 200px;
            height: 200px;
            background-image: url('app_images/star1.jpg');
            background-color: lightyellow;
            background-size: 90%;
            background-repeat: no-repeat;
            background-position: right 15px bottom 20px;
            clip-path: polygon(50% 0%, 61% 35%, 98% 35%, 68% 57%, 79% 91%, 50% 70%, 21% 91%, 32% 57%, 2% 35%, 39% 35%);
        }

        #star2 {
            position: absolute;
            top: 10px;
            right: 16px;
            width: 200px;
            height: 200px;
            background-image: url('app_images/star2.jpg');
            background-color: lightyellow;
            background-size: 90%;
            background-repeat: no-repeat;
            background-position: right 1px top ;
            clip-path: polygon(50% 0%, 61% 35%, 98% 35%, 68% 57%, 79% 91%, 50% 70%, 21% 91%, 32% 57%, 2% 35%, 39% 35%);
        }
    </style>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css" />
</head>
<body>
    <!-- Wrapper -->
    <div id="wrapper">
        <!-- Header -->
        <header id="header">
            <div class="inner">
                <!-- Logo -->
                <a href="index.php" class="logo">
                    <span class="symbol"><img src="app_images/logo.jpg" alt="" /></span><span class="title">Community Children's Network</span>
                </a>

                <!-- Nav -->
                <nav id="menu">
                    <ul>
                        <li><a href="#menu">Menu</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <!-- Menu -->
        <nav id="menu">
            <h2>Menu</h2>
            <ul>
                <li><a href="index.php">Home</a></li>
            </ul>
        </nav>
        <!-- Main -->
        <div id="main">
            <div class="inner">
                <h1 class="lead" id="heading" style="background-color:rgba(0,128,128,0.6);">Children's Day 2018</h1>
                <blockquote class="lead" id="quote2">Seven things every child needs to hear: I love you, I’m proud of you, I’m sorry, I forgive you, I’m listening. This is your responsibility. You have what it takes to succeed. <footer>Sherrie Campbell, PhD</footer></blockquote>
                <div class="jar">
                    <div id="particles-js"></div>
                    <div id="star1"></div>
                    <div id="star2"></div>
                </div>
				<br />
				<dl class="lead" id="childrenshistory">
					<dt style="background-color:rgba(0,128,128,0.6);">The History</dt>
					<dd>Children's Day observations in the United States predate both Mother's and Father's Day. The day to celebrate children dates from the 1860s and earlier.</dd>
					<dd>The Methodist Episcopal Church at the Methodist Conference of 1868 recommended that the second Sunday in June be observed annually as Children’s Day.</dd>
					<dd>The General Assembly of the Presbyterian Church in 1883 designated the second Sabbath in June as Children’s Day.</dd>
					<dd>The Commonwealth of Massachusetts issues an annual proclamation for the second Sunday in June.</dd>
					<dd>Numerous churches and denominations currently observethe second Sunday in June including the African Methodist Episcopal Church, African Methodist Episcopal Zion Church, Christian Methodist Episcopal Church, and the Church of the Nazarene.</dd>
				</dl>
				
                <p class="lead" id="intro">Join in the Children’s Day celebration and send your daughter, son, grandchildren, niece, nephew, cousin or just a great kid some LOVE. </p>
				<h3 class="lead" id="posts" style="background-color:rgba(0,128,128,0.6);">Posts</h3>				
			</div>  <!-- end inner div-->
        </div>
		
		
		
		
		
		
		<!--Uploads- example start-->
		<hr> 
 
<form id="form" action="ajaxupload.php" method="post" enctype="multipart/form-data">
<div class="form-group" style="text-align:center;">
<label for="message">Message</label>
<input type="text" class="form-control" id="message" name="message" placeholder="Enter message" required />
</div>
<input id="uploadImage" type="file" accept="image/*" name="image" />
<br>
<input class="btn btn-success" type="submit" value="Upload">
<!--thumbnail start-->
<div id="thumbrow" class="row">
  <div class="col-xs-6 col-md-3">
    <a class="thumbnail" style="text-align:center;margin:auto;">
      <div id="preview"></div>
    </a>
  </div>
</div>
<!--thumbnail end-->
</form>
 
<div id="err"></div>
<hr>
		<!--Uploads - example end-->
		
		
		
		
		
		
		
		
		
		
		
		
		
        <!-- Uploads- original 
        <div class="container">
            <form enctype="multipart/form-data" id="upload_form" method="POST" >
                <div class="form-group">
                    <input type="file" name="file" >
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <input type="text" class="form-control" id="message" name="message" placeholder="Enter message" />
                </div>
                <input class="btn btn-success" type="submit" value="Upload" onclick="add_file();">
                <div class="show"></div>
                <hr>
            </form>
            <div class="show-images"></div>
        </div> < close container -->
		
		
		
		
		
		
		
		
		
		
		
		
        <!-- Footer -->
        <footer id="footer">
            <div class="inner">
                <section>
                    <!--<h2>Get in touch</h2>-->
                    <form method="post" action="https://formspree.io/cleumadaop@aol.com">
                        <div class="field half first">
                            <input type="text" name="name" id="name" placeholder="Name" />
                        </div>
                        <div class="field half">
                            <input type="email" name="_replyto" id="email" placeholder="Email" />
                        </div>
                        <div class="field">
                            <textarea name="note" id="note" placeholder="Message"></textarea>
							<input class="display-none" style="display:none" type="text" name="_gotcha">
                        </div>
                        <ul class="actions">
                            <li><input type="submit" value="Send" class="special" /></li>
                        </ul>
                    </form>
                </section>
                <section>
                    <h2>Follow</h2>
                    <ul class="icons">
                        <!--<li><a href="#" class="icon style2 fab fa-youtube"><span class="label">YouTube</span></a></li>-->
                        <li class="popup" ><a class="icon style2 fa-phone"><span class="label" id="myPopup">(216) 361-2040</span></a></li>
                        <li class="popup" ><a class="icon style2 fa-envelope-o"><span class="label" id="myPopup">cleumadaop@gmail.com</span></a></li>
                    </ul>
                </section>
                <ul class="copyright">
                    <li>&copy; Cleveland UMADAOP. All rights reserved</li>
                    <li>Designed with Love: <a href="http://alexischandler.com">A-CHAN</a></li>
                    <li><a href="policy.php">Privacy Policy</a></li>
                    <li><a href="terms.php">Terms & Conditions</a></li>
                </ul>
            </div>
        </footer>
    </div>
    <!-- Scripts -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/skel.min.js"></script>
    <script src="js/util.js"></script>
    <script type="text/javascript" src="js/particles.js"></script>
    <script src="js/main.js"></script>
    <script type="text/javascript" src="js/app.js"></script>
</body>
</html>