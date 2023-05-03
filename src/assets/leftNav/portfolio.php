<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" 
"http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<script type="text/javascript">

//var http = (window.ActiveXObject) ? new ActiveXObject("Microsoft.XMLHTTP"

var counter = 1;

var num = 0;

function fadeIn() {
	num++;

	background = document.getElementById('unopacified').style;

	background.opacity = num/10;

	if(!(num == 9))
	setTimeout(fadeIn,80);

}

function intro() {
	if (navigator.userAgent.indexOf('iPod') == -1 && navigator.userAgent.indexOf('Android') == -1 && navigator.userAgent.indexOf('iPhone') && navigator.userAgent.indexOf('iPad') == -1) {
		document.getElementById('lace').style.minHeight = parseInt(document.getElementById('main').offsetHeight)+18+'px';

	//	document.getElementById('main').style.minHeight = parseInt(document.getElementById('unopacified').offsetHeight)+30+'px';

		var background = document.getElementById('bg');

		document.getElementById('triangle').style.top = parseInt(document.getElementById('triangle').style.top)+18+'px';

		background.style.height = parseInt(background.style.height)+18+'px';

		if(parseInt(background.style.height) <= /* + 200*/(parseInt(document.getElementById('main').offsetHeight)+205)) {
			setTimeout(intro,100);
		}
		else {
			document.getElementById('triangle').style.display = "none";
	//		document.getElementById('lace').style.minHeight = parseInt(document.getElementById('main').offsetHeight)+200+'px';
			document.getElementById('lace').style.height = parseInt(document.getElementById("leftside").offsetHeight) + 'px';
			document.getElementById('bg').style.height = parseInt(document.getElementById("leftside").offsetHeight) + 'px';
		//background.style.height = document.getElementById('unopacified').style.height;
		}
	}
	else {
		/* mobile */
		document.getElementById('triangle').style.display = "none";
		document.getElementById('lace').style.height = parseInt(document.getElementById("leftside").offsetHeight) + 'px';
		document.getElementById('bg').style.height = parseInt(document.getElementById("leftside").offsetHeight) + 'px';
		document.getElementById('main').style.background = '#fff url()';
	}
}

function growDiv() {
	if(parseInt(document.getElementById('bar').style.width) < 500){
	document.getElementById('bar').style.width = parseInt(document.getElementById('bar').style.width)+20+'px';
//	document.getElementById('bar').style.width = '515px';
	}

//	document.getElementById('main').style.width = parseInt(document.getElementById('main').style.width)+92+'px';
	document.getElementById('main').style.width = 'auto';

//	if(parseInt(document.getElementById('main').style.width) && parseInt(document.getElementById('main').style.width) <= 480) 
	if(parseInt(document.getElementById('bar').style.width) && parseInt(document.getElementById('bar').style.width) <= 515) 
	setTimeout(growDiv,50);
	else fadeIn();
}

function init() {
	growDiv();
	document.getElementById("triangle").style.display = "block";
	document.getElementById("bg").style.display = "block";
	intro();
	//flicker();
}

window.onload = init;
window.addEventListener("resize", function(event) {
	document.getElementById('triangle').style.display = "block";
	document.getElementById('triangle').style.top = parseInt(document.getElementById("bg").offsetHeight) + 'px';
	init();
});
</script>
<title>Xocolatl (chocolate)</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta name="description" content="Blog and portfolio of Dominique M.B.">
<meta name="keywords" content="video tag HTML5 ipad iphone onclick event handlers self-organizing map som blog dominique kernel portfolio zezipaktli dayoldporridge xocolatl php javascript html tutorials c">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
<!--<link href="https://fonts.googleapis.com/css?family=Roboto|Quicksand" rel="stylesheet">
-->
<link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet">
<style type="text/css">
div{
/*position:absolute;*/
}

textarea {
	width: 100%;
	min-height:80px;
	font-size:13px;
	font-weight:bold;
	font-family:courier new;
	border:0px solid #FFFFFF;
	background-color:transparent;
}

img {
	border:0px;
}

#lace {
	position:absolute;
	min-height:100%;
	width:100%;
	z-index:2;
	left: -315px;
	top:0px;
	background-image:url('images/victorian.png');";
}

#triangle {
	position: absolute;
	left: -317px;
	width:100%;
	background-color:transparent;
	background-image:url('images/img-thing.jpg');
	z-index:1;
}

#triangle,
#bg {
	display: none;
}

.tile {
	float: left;
	margin: 10px;
	word-wrap: break-word;
	width: 560px;
}

#unopacified {
	font-family: 'Abel';
	font-size: 20px;
}

.pixelart {
	top: 0px;
	position: fixed;
	height: 100%;
	width: auto;
	min-width: 315px;
	right: 0px;
	min-height: 448px;
	z-index: -1;
}

.pixelart img {
	top: 0px;
	position: fixed;
	height: 100%;
	width: auto;
	min-width: 315px;
	right: 0px;
	min-height: 448px;
	z-index: -1;
}

.container {
	padding-bottom: 50px;
	background-color: #fff;
	margin-left: 0px;
	padding-left: 35px;
	padding-right: 60px;
	width: auto !important;
	right: 315px;
	left: 0px;
	position: absolute;
}

.nav {
background-color:white;
border:1px solid black;
z-index:3;
overflow:hidden;
position:absolute;
}

.nav div {
	position: absolute;
}

#nav1 {
left:0px;
top:0px;
width:80px;
height:80px;
}

#nav2 {
left:87px;
top:0px;
width:80px;
height:100px;
}

#nav3 {
left:0px;
top:87px;
width:80px;
height:80px;
}

#nav4 {
left:87px;
top:107px;
width:80px;
height:60px;
}

#nav5 {
left:0px;
top:174px;
width:40px;
height:80px;
}

#nav6 {
left:47px;
top:174px;
width:120px;
height:80px;
}

#nav7 {
left:87px;
top:261px;
width:80px;
height:80px;
}

#nav8 {
left:0px;
top:261px;
width:80px;
height:80px;
}

#unopacified h2 {
text-align:right;
color:#77bed2;
font-size:18px;
font-family:'Abel';
/*padding-left:100px;*/
text-transform: uppercase;
padding-top:3px;
padding-bottom:3px;
}

.text-right {
  text-align: right;
}

.small {
  font-size: 16px;
}

a {
color:brown;
font-size:11pt;
font-family:Sans, Arial;
text-decoration:none;
}

html {
overflow:auto;
position:relative;
}

body {
margin:0px;
overflow:auto;
width:100%;
height:100%;
background-color:white;
font-size:11pt;
font-family:Sans, Arial;
text-decoration:none;
}

.desktop {
	display: block;
}

.mobile {
	display: none;
}

#navContainer {
	position:relative;
	width:170px;
	margin-right: 50px;
	height:344px;
	z-index:33;
	float:left;
}

@media screen and (max-width: 1249px) {
	.desktop {
		display: none;
	}

	.mobile {
		display: block;
	}

	#bg,
	#lace,
	#triangle {
		left: 0px;
	}
	.container {
		left:0px;
		position: relative;
		width: 100%;
	}

	body .pixelart {
		position: relative;
		height: auto;
		left:0px;
		width:100%;
		right: 0px;
		z-index: 3;
	}
	body .pixelart img {
		height: auto;
		left: 0px;
		width:100%;
		right: 0px;
		z-index: 3;
		position: relative;
	}
}

@media screen and (max-width: 607px) {
	.firstrow {
		float: left;
		position: relative;
		width: 170px;
		height: 200px;
	}
	.secondrow {
		float: left;
		position: relative;
		width: 173px;
		margin-top: -174px;
		height: 200px;
	}
	.tile img {
		width: 100%;
		height: auto;
	}

	#logo {
		width: 100%;
	}

	#navContainer {
		height: auto;
		margin: auto;
		position: static;
		width: 349px;
		float: none;
		clear: none;
	}

	#main {
		clear: both;
	}
}

</style>

</head>

<body>

<div id="triangle" style="
	top:1px;
	height:210px;
">
&nbsp;
</div>

<div id="lace">
&nbsp;
</div>

<div id="leftside" class="container">
	<div id="bg" style="
	position:absolute;
	left: 0px;
	top:0px;
	background-color:#e5f9d9;
	width:100%;
	height:1px;
	z-index:1;">
	&nbsp;
	</div>

	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-10">
			<div id="title" style="
			position: relative;
			margin-top: 20px;
			float: right;
			z-index:4;">
				<img id="logo" alt="Xocolatl, meaning 'chocolate'." src="images/title.png">
			</div>

			<div id="bar" style="
			z-index:4;
			position: relative;
			clear: both;
			width:0px;
			float: right;
			margin-bottom:32px;
			height:15px;
			background-color:hotpink;
			overflow:hidden;
			background-image:url('images/multipixels.jpg');">
			&nbsp;
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div id="navContainer" style="">
				<div class="firstrow">
					<div id="nav1" class="nav">
						<div style="
							top:0px;
							left:0px;
							z-index:2;">
							<a href="tutorials.php">
								<img src="images/tutorialstext.png" alt="Tutorials">
							</a>
						</div>

						<div style="
							top:-15px;
							left:-40px;
							z-index:1;">
							<a href="tutorials.php">
								<img src="images/books.jpg" alt="Tutorials">
							</a>
						</div>
					</div>

					<div id="nav2" class="nav">
						<div style="
							top:0px;
							left:0;
							z-index:2;">
							<a href="misc.php">
								<img src="images/misctext.png" alt="Miscellaneous">
							</a>
						</div>

						<div style="
							top:-40px;
							left:-100px;">
							<a href="misc.php">
								<img src="images/boxes-small.jpg" alt="Miscellaneous">
							</a>
						</div>
					</div>

					<div id="nav3" class="nav">
						<div style="
							top:0px;
							left:0px;
							z-index:2;">
							<a href="portfolio.php">
								<img src="images/portfoliotext.png" alt="Portfolio">
							</a>
						</div>

						<div style="
							top:-30px;
							left:-40px;">
							<a href="portfolio.php">
								<img src="images/pixels-small.jpg" alt="Portfolio">
							</a>
						</div>
					</div>

					<div id="nav4" class="nav">
						<div style="
							top:0px;
							left:0px;">
							<img src="images/cds-small.jpg" alt="">
						</div>
					</div>
				</div> <!-- .firstrow -->

				<div class="secondrow">
					<div id="nav5" class="nav">
						<div style="
							top:-10px;
							left:-20px;
							z-index:1;">
							<img src="images/photo.jpg" alt="">
						</div>
					</div>

					<div id="nav6" class="nav">
						<div style="
							top:0px;
							left:0px;
							z-index:2;">
							<a href="index.php">
								<img src="images/hometext.png" alt="Home & Blog">
							</a>
						</div>

						<div style="
							top:-21px;
							left:10px;">
							<a href="index.php">
								<img src="images/home-icon.jpg" alt="Home & Blog">
							</a>
						</div>
					</div>

					<div id="nav7" class="nav">
						<div style="
							top:0px;
							left:0px;
							z-index:2;">
							<a href="contact.php">
								<img src="images/contacttext.png" alt="Contact">
							</a>
						</div>

						<div style="
							top:-40px;
							left:0px;">
							<a href="contact.php">
								<img src="images/envelopes-small.jpg" alt="Contact">
							</a>
						</div>
					</div>

					<div id="nav8" class="nav">
						<div style="
							top:0px;
							left:0px;
							z-index:2;">
							<a href="projects.php">
								<img src="images/projectstext.png" alt="Projects & Source Code">
							</a>
						</div>
						
						<div style="
							top:-40px;
							left:-10px;">
							<a href="projects.php">
								<img alt="Projects & Source Code" src="images/old_computer.jpg">
							</a>
						</div>
					</div>
				</div> <!-- .secondrow -->
			</div>
			<!-- End Navigation -->


			<div id="main" style="
z-index:4;
padding-left:30px;
word-wrap: break-word;
padding-right:30px;
width:auto;
background-color: transparent;
background:url(images/1x1white.png) repeat;
border: 1px solid #fb5b96;
position: relative;
overflow:auto;">
				<div id="unopacified">

<h2>Portfolio</h2>
<div class="text-right small">Dominique M.B.</div>
<div class="text-right small"><a href="http://github.com/dominiquemb">github.com/dominiquemb</a></div>
<div class="text-right small">conejoplata@gmail.com</div>

<br />

<div class="tile">
	<u><a href="http://34.73.66.209:3000/">Appointment Scheduler</a></u> -- Appointment scheduler front-end built with ReactJS. Click the image for live demo.

	<br><br>

	<a href="http://34.73.66.209:3000/"><img src="https://raw.githubusercontent.com/dominiquemb/dominiquemb.github.io/master/appointment-scheduler.gif" /></a>
</div>

<div class="tile">
	<u><a href="/ondevs/index.php">OnDevs</a></u> -- Proposed layout for http://ondevs.com. Click the image for live demo.

	<br><br>

	<a href="/ondevs/index.php"><img src="images/ondevs.png" /></a>
</div>

<div class="tile">
	<u><a href="/ibrowse/exercise1/index.php">iBrowse 1st Exercise</a></u> -- Coding exercise for iBrowse. Click the image for live demo.

	<br><br>

	<a href="/ibrowse/exercise1/index.php"><img src="images/ibrowse.png" /></a>
</div>

<div class="tile">
	<u><a href="/ibrowse/exercise2/index.php">iBrowse 2nd Exercise</a></u> -- Coding exercise for iBrowse. Click the image for live demo.

	<br><br>

	<a href="/ibrowse/exercise2/index.php"><img src="images/ibrowse2.png" /></a>
</div>

<div class="tile">
	<u><a href="/lending/index.php">LibreLending</a></u> -- Website for http://librelending.com. Click the image for live demo.

	<br><br>

	<a href="/lending/index.php"><img src="images/librelending.png" /></a>
</div>

<div class="tile">
	<u><a href="/theopenfund/index.html">The Open Fund</a></u> -- <strong>Concept</strong> landing page for The Open Fund. Click the image for live demo.

	<br><br>

	<a href="/theopenfund/index.html"><img src="images/theopenfund.png" /></a>
</div>

<div class="tile">
	<u><a href="/soshio-login-signup/angular/index.html">Soshio Login/Signup</a></u> -- <strong>Unfinished</strong> AngularJS login/signup process for Soshio (New York). Click the image for live demo.

	<br><br>

	<a href="/soshio-login-signup/angualr/index.html"><img src="images/soshio-login.png" /></a>
</div>

<div class="tile">
	<u><a href="https://github.com/dominiquemb/ironhold-front-end/tree/master">IronHold</a></u> - AngularJS web app for RQ Partners, Inc. / Reqo, Inc. (New York). Because the app is heavily dependent on the database which I do not have access to, only the source code for the front-end is available. Clicking on the link will take you to the github repository for this project.

	<br><br>

	<a href="https://github.com/dominiquemb/ironhold-front-end/tree/master"><img src="http://54.201.57.55/rqpartners/mockups/ironhold/2014-02-26-UI-Concept.png" width="549" /></a>
</div>

<div class="tile">
<u><a href="/travtar/index.html">Travtar Demo</a></u> -- <strong>Unfinished</strong> layout for Travtar. Click the image for live demo.

<br><br>

<a href="/travtar/index.html"><img src="images/travtar.png" /></a>
</div>

<br><br>

<div class="tile">
	<u><a href="/aircomp/index.html">AirComp Mobile Web App</a></u> -- <strong>Unfinished</strong> web app for iOS. Click the image for live demo.

	<br><br>

	<a href="/aircomp/index.html"><img src="images/aircomp.png" /></a>
</div>

<div class="tile">
	<u><a href="/tarzanawinesandspirits/index.html">Tarzana Wines & Spirits</a></u> -- Proposed layout for Tarzana Wines &amp; Spirits. Click the image for live demo.

	<br><br>

	<a href="/tarzanawinesandspirits/index.html"><img src="images/tarzanawinesandspirits.png" /></a>
</div>

<div class="tile">
	<u>Dr. Hola! Wellness Products</u> (currently offline)

	<br><br>

	<img src="images/drhola-preview.png" />
</div>

<div class="tile">
	<u>abvcinc.com</u> (currently offline) -- Main site for the Santa Monica Volleyball Coach Association.

	<br><br>

	<img src="images/abvcinc.png" />
</div>

<div class="tile">
	<u>Air Hitch Travel</u> (currently offline) -- Website for an airplane ticket brokerage company.

	<br><br>

	<img src="images/airhitch.png" />
</div>

<div class="tile">
	<u>Frutogard</u> (currently offline) -- Draft version of website for Frutogard, a nutritive supplement for plants.

	<br><br>

	<img src="images/frutogard.png" />
</div>

					</div> <!-- unopacified -->
				</div>
			</div>
		</div>
	</div>
	<div class="pixelart">
		<img class="desktop" src="images/cityscape.gif" />
		<img class="mobile" src="images/hotpinkcityscape.gif" />
	</div>
</body>
</html>
