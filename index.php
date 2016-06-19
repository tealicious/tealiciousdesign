<?php
if($_POST["submit"]) {
    $recipient="licioustealicious@gmail.com";
    $subject="Contact Message from Tealicious Homepage";
    $sender=$_POST["sender"];
    $senderEmail=$_POST["senderEmail"];
    $message=$_POST["message"];

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender <contact@tealiciousdesign.com>");
	$thankYou="Thank you! Your message has been sent.";
}


?>
<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="theme-color" content="#000000" />
	<title>Freelance Web Designer and Developer Cincinnati</title>
	<meta name="author" content="Codrops" />
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="icon" href="whiteEwok.png">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
  <!--  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/badges.css">
  <link rel="stylesheet" type="text/css" href="css/component.css" />
  <link rel="stylesheet" type="text/css" href="css/demo.css" />   FORMER CSS STACK AND ORDER-->
	  <link rel="stylesheet" type="text/css" href="css/index.min.css" />
	<script src="js/modernizr-custom.js"></script>
</head>

<body>
<div id="konami"></div>
<img class="poster" id="ewok2" src="images/blackEwok.png" alt="img01">
	<!-- navigation -->
	<nav class="pages-nav">
		<div class=" icon-set pages-nav__item"><a class="link link--page" href="#page-home"><span>Home</span><i class="fa fa-2x fa-home" aria-hidden="true"></i></a></div>
		<div class=" icon-set pages-nav__item"><a class="link link--page" href="#page-docu"><span>Resum&#233</span><i class="fa fa-2x fa-file-text" aria-hidden="true"></i></a></div>
		<div class=" icon-set pages-nav__item"><a class="link link--page" href="#page-manuals"><span>work</span><i class="fa fa-2x fa-television" aria-hidden="true"></i></a></div>
		<div class=" icon-set pages-nav__item"><a class="link link--page" href="#page-software"><span>about</span><i class="fa fa-2x fa-user" aria-hidden="true"></i></a></div>
		<div class=" icon-set pages-nav__item pages-nav__item--small"><a class="link link--page link--faded" href="#page-contact"><span>Contact</span><i class="fa fa-2x Example of envelope-o fa-envelope-o"></i></a></div>
		<div class="pages-nav__item pages-nav__item--social">
			<a target="_blank" class="link link--social link--faded" href="https://www.instagram.com/tea_lish/"><i class="fa fa-instagram"></i><span class="text-hidden">Instagram</span></a>
      <a target="_blank" class="link link--social link--faded" href="https://www.behance.net/tealicious"><i class="fa fa-behance"></i><span class="text-hidden">Behance</span></a>
      <a target="_blank" class="link link--social link--faded" href="https://github.com/tealicious"><i class="fa fa-github"></i><span class="text-hidden">Github</span></a>
      <a target="_blank" class="link link--social link--faded" href="https://www.youtube.com/channel/UCDYeH_JVLS8EcJZKByHxX9A"><i class="fa fa-youtube-play"></i><span class="text-hidden">YouTube</span></a>
      <a target="_blank" class="link link--social link--faded" href="https://www.facebook.com/TLiscious"><i class="fa fa-facebook"></i><span class="text-hidden">Facebook</span></a>
      <a target="_blank" class="link link--social link--faded" href="https://www.linkedin.com/in/daniel-carter-a49b9b41"><i class="fa fa-linkedin"></i><span class="text-hidden">LinkedIn</span></a>
		</div>
	</nav>
	<div class="pages-nav__item2 pages-nav__item--social2">
      <a target="_blank" class="link link--social link--faded" href="https://www.behance.net/tealicious"><i class="fa fa-behance"></i><span class="text-hidden">Behance</span></a>
      <a target="_blank" class="link link--social link--faded" href="https://github.com/tealicious"><i class="fa fa-github"></i><span class="text-hidden">Github</span></a>
			<a target="_blank" class="link link--social link--faded" href="https://www.instagram.com/tea_lish/"><i class="fa fa-instagram"></i><span class="text-hidden">Instagram</span></a>
			<a target="_blank" class="link link--social link--faded" href="https://www.linkedin.com/in/daniel-carter-a49b9b41"><i class="fa fa-linkedin"></i><span class="text-hidden">LinkedIn</span></a>
			<a target="_blank" class="link link--social link--faded" href="https://www.facebook.com/TLiscious"><i class="fa fa-facebook"></i><span class="text-hidden">Facebook</span></a>
			<a target="_blank" class="link link--social link--faded" href="https://www.youtube.com/channel/UCDYeH_JVLS8EcJZKByHxX9A"><i class="fa fa-youtube-play"></i><span class="text-hidden">YouTube</span></a>
		</div>
	<!-- /navigation-->
	<!-- pages stack -->
	<div class="pages-stack">
		<!-- page -->
		<div class="page" id="page-home">
		<div id="diagonal_outer"><div id="diagonal"></div></div>
			<!-- Blueprint header -->
			<header class="bp-header cf">
			<div class="home title">
				<h1 class="bp-header__title title-flip">tea <span class="strikethrough">licious</span> design</h1>
				</div>
			</header>
			<div class="container-fluid" id="ewok-fluid">
		<div class="document-shadow" id="home-shadow">
		<div class="flip-card">
		<div class="card-side" id="neilEwok"><p>flip</p></div>
		<div class="card-side" id="neilEwokBack"><p>flip</p>
		<iframe class="song" width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/251050342&amp;color=ff9894&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>
		</div>
		</div>
		</div>
		</div>

		</div>
		<!-- /page -->
		<div class="page" id="page-docu">
		<div id="diagonal_outer"><div id="diagonal"></div></div>
			<header class="bp-header cf">
			<div class="title">
				<h1 class="bp-header__title strikethrough">Resum&#233</h1>
				</div>
			</header>
			<div class="section resume">
        <div class="container-fluid">
		<div class="document-shadow resume-shadow">
            <div class="row">
					<div class="resume-head">
					<div class='col-md-6'>
				<h1>Daniel Carter</h1>
					</div>
					<div class='col-md-6'>
				<h2> Front End Web Developer </h2>


				</div>
			</div>
			</div>
			<div class="border special"></div>
			 <div class="row">
                <div class='col-md-12 top'>

                    	<h2 class=center>GENERAL SKILLS AND ABILITIES</h2>

                </div>

                <div class="col-md-5 col-md-push-1">
                    <ul class=left>
                        <li>Dev Languages: HTML5 / CSS3 / Sass / JavaScript / jQuery</li>
						<li>Frameworks: Bootstrap / Foundation</li>
						<li>Version Control: Git on Git Bash</li>
                        <li>Advanced Proficiency: Photo Manipulation</li>
                        <li>Advanced Proficiency: DSLR Photography</li>
						<li>Highly Proficient: Layout and Graphic Design with Photoshop and GIMP</li>
                    </ul>
                </div>
				<div class="col-md-5 col-md-offset-1">
                    <ul class=left>
						<li>Advanced Written and Oral Communication Skills</li>
                        <li>Strong Presentation & Negotiation Skills</li>
                        <li>Advanced Online Social Networking Experience</li>
                        <li>Demonstrated Customer Service Skills</li>
                        <li>Highly Proficient: Microsoft Outlook, Word, Excel, and PowerPoint</li>
                    </ul>
                </div>
            </div>
            <div class=border></div>
            <div class="row">
                <div class="col-md-12">
                    	<h2 class=center>EDUCATION</h2>

                </div>
                <div class="col-md-6 col-md-push-6">
                     <h3>B.A. SPEECH COMMUNICATION<br> Miami University Ohio</h3>

                     <h3>December 2008</h3>
                </div>
                <div class="col-md-6 col-md-pull-6">
                    <ul class=right>
                        <li>3.6 GPA within Major; Overall 3.2 GPA</li>
                        <li>Completed 52 credit hours in Communications Major</li>
                        <li>Researched and completed a thesis as an undergraduate</li>
                    </ul>
                </div>
            </div>
                <div class=border></div>
            <div class="row">
                <div class="col-md-12">
                    	<h2 class=center>EXPERIENCE</h2>

                </div>

				<div class="col-md-4">
                     <h3 class=right>WEB DEVELOPER<br>
                         Self – <a href="https://tealiciousdesign.com/">TealiciousDesign.com</a>
</h3>

                     <h3 class=right>Nov - 2015 – Current</h3>

                     <h3 class=right>Mason, OH  </h3>

                </div>
				<div class="col-md-7">
                    <ul><li><strong>Design, develop, and implement all html/css/jQuery, and host following projects:</strong></li>
                        <li><a href="http://tealiciousdesign.com/Plaid%20Room%20Records/www/index.html">Plaid Room Records</a>: Integrate established branding into original web layout</li>
						<li><a href="http://tealiciousdesign.com/R&W%20Backups/startbootstrap-creative-1.0.2/index.html">R & W Auto</a>: Develop solution to update existing site by coordinating with 3rd party responsible for hosting inaccessible and embedded iframe content</li>
						<li><a href="http://tealiciousdesign.com/Skateboard/team.html">Cream Skateboards</a>: Conceptualize and implement online branding identity</li>
						<li><a href="http://tealiciousdesign.com/bake/index.html">BAKE!</a>: Create branding identity and develop a two-tiered e-commerce catering menu</li>

                    </ul>
                </div>
				</div>
				<div class=row>
                <div class="col-md-4">
                     <h3 class=right>WEB CONTENT ADMINISTRATOR<br>
                         Intelligrated – <a href="https://ontimeparts.com/">OnTimeParts.com	</a>
</h3>

                     <h3 class=right>Jan 2012 – Jul 2015</h3>

                     <h3 class=right>West Chester, OH  </h3>

                </div>
                <div class=col-md-7>
                    <ul>
                        <li>Train, lead and plan out weekly photography workflow for diverse project work groups</li>
                        <li>Oversee or personally shoot original photo content for over 400 pieces monthly</li>
                        <li>Manage the uploading, downloading, copying and editing of digital files on a daily basis (20,000+ photos uploaded to date)</li>
                        <li>Alter all shot images with advanced image manipulation techniques</li>
                        <li>Peer review and revise old photographic content</li>
                        <li>Assign tech support contract end dates and grant specific access rights to registered Dashboard users approx. 3-4 time weekly</li>
                        <li>Create Dashboard company profiles for new customers approx. 1-5 times weekly</li>
                        <li>Beta test new design features in OnTimeParts.com</li>
                    </ul>
                </div>
            </div>
            <div class=row>
                <div class="col-md-4">
                     <h3 class=right>BOOK SELLER<br>
Barnes and Noble</h3>


                         <h3 class=right>Sep 2010 – Oct 2011</h3>

                     <h3 class=right>West Chester, OH  </h3>

                </div>
                <div class="col-md-7">
                    <ul>
                        <li>Help customers find media or literature</li>
                        <li>Rotate and report accurate and precise inventory numbers</li>
                        <li>Read to children during special events</li>
                        <li>Assist café team members with customer service needs</li>
                        <li>Work with team members to promote fast and effective customer service</li>
                    </ul>
                </div>
            </div>

                 <div class=row>
                <div class="col-md-4">
                     <h3 class=right>FIELD ASSOCIATE<br>
Erosion Runner</h3>


                         <h3 class=right>May 2009 – May 2010</h3>

                     <h3 class=right>Springboro, OH</h3>
 </div>
                <div class="col-md-4">
                    <ul>
                        <li>Silt fence installation and repair</li>
                        <li>Pick heavy stuff up</li>
                        <li>Put heavy stuff down</li>
                         <li>Pneumatic staple guns</li>
                        <li>All kinds of other hard work</li>
                    </ul>
                </div>
				<div class="col-xs-3 col-md-offset-1 cvOuter">
				<div class="cvInner">
				<a class="link link--page" href="DanielCarterResume.doc"><i class="fa fa-2x fa-file-text-o"></i>
				<p>res.doc</p></a>
				</div>
				</div>
            </div>
        </div>
		<div class = "row report">
				<div class="col-md-8 col-md-push-2">
               <div class="report-card treehouse"></div>
			   </div>
			   </div>
		</div>
    </div>

		</div>


		<div class="page" id="page-manuals">
		<div id="diagonal_outer"><div id="diagonal"></div></div>
			<header class="bp-header cf">
			<div class="col-xs-6">
			<div class="title">
			<h1 class="bp-header__title strikethrough">work</h1>
							<img class="sprite" src="../images/sprites.png">
			</div>
			</div>
			<div class="col-xs-6">
			<div class="title">
				<h1>WEB</h1>
				<p>Site development</p>
			</div>
			</div>
			</header>



		<div class="container-fluid" id="design">


                <div class=row>

                    <div class="col-md-8 col-sm-12">

					<div class="thumbnail effect-goliath">

					<img class="cole" src="images/colemine.JPG">
					<div class="caption">

                                    <h2>plaidroom records</h2>

                                    <p>Responsive redesign for a real record store</p>
									<a class="work-link" href="Plaid Room Records/www/index.html">visit</a>
						</div>




					</div>
					</div>


				<div class="col-md-4 col-sm-12">
					<div class="thumbnail effect-goliath">
						<img src="images/car.jpg">
								<div class="caption">
                                    <h2>R&W Auto</h2>

                                    <p>Iframe development for a small business website overhaul</p>
									<a class="work-link"   href="http://tealiciousdesign.com/R&W%20Backups2/startbootstrap-creative-1.0.2/index.html">visit</a>
								</div>


					</div>
				</div>




				<div class="col-md-4 col-sm-12">

					<div class="thumbnail effect-goliath">
					<img class="cole" src="images/creamboards.jpg">

								<div class="caption">
                                    <h2>Creamboards</h2>

                                    <p>Branding concept for a skateboard company</p>
								<a class="work-link"  href="http://tealiciousdesign.com/Skateboard/team.html">visit</a>
								</div>

					</div>
					</div>





				<div class="col-md-8 col-sm-12">
					<div class="thumbnail effect-goliath">
						<img class="sideB lesserImg" src="images/bake.jpg">
								<div class="caption">
                                    <h2>BAKE!</h2>

                                    <p>Designer caf&#233 and bakery for an emerging niche market</p>
									<a  href="bake/index.html" class="work-link">visit</a>
								</div>
					</div>
				</div>
        <div class="col-md-12 col-sm-12">

<div class="thumbnail effect-goliath">

<img class="cole" src="images/laptop.jpg">
<div class="caption">

                        <h2>Development Process Blog</h2>

                        <p>Posts about my latest project codenamed "Wild Men Die" as it develops</p>
      <a class="work-link" href="http://tealiciousdesign.com/blog/home/">visit</a>
</div>




</div>
</div>
		</div>

		</div>
		<div class="container-fluid">
		<div class="title">
				<h1>PHOTO</h1>
				<p>Shot and edited by me during my time at<a target="_blank" href="https://www.ontimeparts.com/"> OnTimeParts.com</p>
			</div>
			</div>

		<div class="container-fluid">
		<div class="document-shadow photo-shadow">

                <div class=row>
                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">
							<a href="http://d2khlf0fizh5q.cloudfront.net/uploads/media_image/tl-image/6d/bd3650f59011e4b0ff3b0e9c3699c9/hd_12Edit.jpg">
                            <img class="img-responsive" src="images/1.jpg">
							</a>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">
							<a href="http://d2khlf0fizh5q.cloudfront.net/uploads/media_image/tl-image/21/ffacd0f58f11e480e10314780111ca/hd_23612200_1.jpg">
                            <img class="img-responsive" src="images/2.jpg">
							</a>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">
							<a href="http://d2khlf0fizh5q.cloudfront.net/uploads/media_image/tl-image/a8/6b3280f59411e48fde2148ec0f9f4f/hd_Fans-_-Thermal-Management-Equipment.jpg">
                            <img class="img-responsive" src="images/3.jpg">
							</a>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">
							<a href="http://d2khlf0fizh5q.cloudfront.net/uploads/media_image/tl-image/a6/b915b0f59411e48fde2148ec0f9f4f/hd_29447300_1.jpg">
                            <img class="img-responsive" src="images/4.jpg">
							</a>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">
							<a href="http://d2khlf0fizh5q.cloudfront.net/uploads/media_image/tl-image/20/b5eec0f58f11e480e10314780111ca/hd_49038901_1.jpg">
                            <img class="img-responsive" src="images/5.jpg">
							</a>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">
							<a href="http://d2khlf0fizh5q.cloudfront.net/uploads/media_image/tl-image/1f/25d8e0f58f11e480e10314780111ca/hd_29782000_1.jpg">
                            <img class="img-responsive" src="images/6.jpg">
							</a>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">
							<a href="http://d2khlf0fizh5q.cloudfront.net/uploads/media_image/tl-image/1c/76be70f58f11e480e10314780111ca/hd_2988200_1.jpg">
                            <img class="img-responsive" src="images/7.JPG">
							</a>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">
							<a href="http://d2khlf0fizh5q.cloudfront.net/uploads/media_image/tl-image/de/1448f0f58e11e4a15f9fc8c4e95536/hd_1705838_1.jpg">
                            <img class="img-responsive" src="images/8.JPG">
							</a>
                    </div>
		</div>
		</div>
		</div>


		</div>


		<div class="page about" id="page-software">
		<div id="diagonal_outer"><div id="diagonal"></div></div>
			<header class="bp-header cf">
			<div class="title">
				<h1 class="bp-header__title strikethrough">about</h1>
				</div>
			</header>
			<div class="container-fluid">
        <div class="document-shadow resume-shadow about-shadow">
			<div class="row">

			<div class="table">
			<div class="table-cell">
			<div class="col-sm-7">
			<p>Hello, I'm Daniel, a hard working guy and freelance front end web developer. I started learning code to better understand the languages powering the most important communication tool to date. It is incredibly satisfying to design and build a dynamic web application. I push hard every day to learn about new dev languages, web-building tools, and best practices so that I can create fast, fun, and highly functional web applications with a top-tier, end-user's experience in mind.</p>
			<br>
					<p>I like music, film, coffee, beer, motorcycles, skateboards, video games, food and all other types of life's little luxuries. And when it comes to Game of Thrones, I prefer the show to the books. <strong style="display:block">¯\_(ツ)_/¯</strong></p>
					<br>
					<p>You may be wondering about that weird homepage image of mine. It's a photo manipulation that alludes to Neil Young and Crazy Horse's Rust Never Sleeps tour, which featured <a target="_blank" href="http://a-six-demon-bag.blogspot.com/2013/02/neil-young-and-jawas.html">Jawas</a>, from the original Star Wars films.</p>
					<br>
					</div>
					<div class="col-sm-5">
					<p>I love web development. It's a never-ending puzzle, with new stuff to learn around every corner. My goal is to do quality, collaboratively-driven work for people and organizations who have positive effects on the communities they serve, and to do this by assessing their core values and mission, and reflecting them accurately in my design. If you're reading this, chances are good that I may have given you a card, or you are considering reaching out to talk to me about a project or position.  Trust Shia on this one and just <a target="_blank" href="https://www.youtube.com/watch?v=cxCCp3nbCEk">do it</a>.
					</p>
					</div>
					</div>
					</div>

		</div>
  </div>
		</div>
		</div>

		<div class="page" id="page-contact">
		<div id="diagonal_outer"><div id="diagonal"></div></div>
			<header class="bp-header cf">
				<div class="title">
				<h1 class="bp-header__title strikethrough">Contact</h1>
				</div>
			</header>
							<div id="contact">
							<div class="container-fluid">
							<div class="row">

							<div class="col-md-5 text-center">
							<div class="contact-info">
							<div class="contact-info-cell">
							<h3>Details</h3>


					<i class="fa fa-3x fa-mobile"></i>
					<a class="link link--page" href="tel:513.519.7465"><h2>513.519.7464</h2></a>
					<i class="fa fa-2x fa-envelope"></i>
					<a class="link link--page" href="mailto:licioustealicious@gmail.com"><h2>licioustealicious@gmail.com</h2></a>

							</div>
							</div>
							</div>
							<div class="col-md-7">

							<form class="cd-form floating-labels" action="index.php" method="post">
		<fieldset>
			<legend>Get In Touch</legend>

			<div class="error-message">
				<p>Please enter a valid email address</p>
			</div>

			<div class="icon">
				<label class="cd-label" for="cd-name">Name</label>
				<input class="user validate[required,custom[onlyLetter],length[0,100]]" type="text" name="sender" id="cd-name">
		    </div>


		    <div class="icon">
		    	<label class="cd-label" for="cd-email">Email</label>
				<input class="email validate[required,custom[email]]" type="email" name="senderEmail" id="cd-email">
		    </div>
		</fieldset>

		<fieldset>
			<div class="icon">
				<label class="cd-label" for="cd-textarea">Your Message</label>
      			<textarea class="message validate[required,length[6,300]]" name="message" id="cd-textarea"></textarea>
			</div>

			<div>
		      	<input type="submit" name= "submit" value="SEND" target="_blank">
		    </div>
		</fieldset>
	</form>
				</div>
				</div>
				</div>
				</div>
				</div>
		</div>
	</div>
	<!-- /pages-stack -->
	<button class="menu-button"><span>work</span></button>
	<script   src="https://code.jquery.com/jquery-1.12.3.min.js"   integrity="sha256-aaODHAgvwQW1bFOGXMeX+pC4PZIPsvn2h1sArYOhgXQ="   crossorigin="anonymous"></script>
  <script src="js/index.min.js"></script>
	<!--<script src="js/photography.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/classie.js"></script>
	<script src="js/main.js"></script>
	<script src="js/reportcard.js"></script>
	<script src="js/konami.js"></script>
	<script src="js/main2.js"></script>ORIGINAL ORDER-->
  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-79229401-1', 'auto');
  ga('send', 'pageview');

</script>
</body>

</html>
