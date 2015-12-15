 <?php
if(isset($_POST['boton'])){
 if(!empty($_POST['name']) AND !empty($_POST['email'])){

$to ="info@CrowdJury.org";
$headers = "Content-Type: text/html; charset=iso-8859-1\n"; 
$headers .= "From:".$_POST['email']."\r\n";			
$tema="I want colaborate!";
$mensaje="
<table border='0' cellspacing='2' cellpadding='2'>
  <tr>
    <td width='20%' align='center' bgcolor='#FFFFCC'><strong>Name:</strong></td>
    <td width='80%' align='left'>$_POST[name]</td>
  </tr>
  <tr>
    <td align='center' bgcolor='#FFFFCC'><strong>E-mail:</strong></td>
    <td align='left'>$_POST[email]</td>
  </tr>
  <tr>
    <td align='center' bgcolor='#FFFFCC'><strong>Messege:</strong></td>
    <td align='left'>$_POST[message]</td>
  </tr>
</table>
";
@mail($to,$tema,$mensaje,$headers); 
     $result= '<div class="alert alert-success" role="alert">
  Thanks for your interest. Message sent successfully. 
</div>';
} else {
	$result= '<div class="lert alert-danger" role="alert">
  Houston, We have a Problem :("
</div>';
}
}
?>
	
<!DOCTYPE HTML>
	<html lang="en">
	<head>
		<title>CrowdJury - Justice For All</title>
		<!-- Seo Position and Social -->
		<meta http-equiv="Content-Type" content="text/html"; charset="utf-8" />
	<meta name="description" content="A Crowdsourced Justice system for the collaboration era. An Open Source Project.">
<meta name="keywords" content="CrowdJury, Bitnation, Bitcoin, Colective Justice, Restorative Justice">	
<meta name="theme-color" content="#FF0000">
<meta property='og:locale' content='en_US'/>
<meta property='og:image' content='http://crowdjury.org/images/bg1.jpg'/>	

		<link href="../css/bootstrap.css" rel='stylesheet' type='text/css' />
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
	<script src="../js/js.cookie.js" charset="utf-8" type="text/javascript"></script>
	<script src="../js/jquery-lang.js" charset="utf-8" type="text/javascript"></script>
	<!--<script src="js/langpack/nonDynamic.js" charset="utf-8" type="text/javascript"></script>-->
	<script type="text/javascript">
		var lang = new Lang();
		lang.dynamic('es', 'js/langpack/es.json');
		lang.init({
			defaultLang: 'en'
		});
	</script>
		 <!-- Custom Theme files -->
		<link href="../css/style.css" rel='stylesheet' type='text/css' />
		<link href="../css/owl.carousel.css" rel='stylesheet' type='text/css' />
   		 <!-- Custom Theme files -->
   		 		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		 
		<script type="text/javascript" src="../js/move-top.js"></script>
<script type="text/javascript" src="../js/form.js"></script>
		 <!---- start-smoth-scrolling---->
		<script type="text/javascript" src="../js/owl.carousel.js"></script>
		<script type="text/javascript" src="../js/easing.js"></script>
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
		 <!---- start-smoth-scrolling---->
		<!----- webfonts ------>
		<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900,300italic,400italic,700italic|Open+Sans:300italic,600italic,400,300,600,700' rel='stylesheet' type='text/css'>
		<!----- webfonts ------>
		<!----start-top-nav-script---->
		<script>
			$(function() {
				var pull 		= $('#pull');
					menu 		= $('nav ul');
					menuHeight	= menu.height();
				$(pull).on('click', function(e) {
					e.preventDefault();
					menu.slideToggle();
				});
				$(window).resize(function(){
	        		var w = $(window).width();
	        		if(w > 320 && menu.is(':hidden')) {
	        			menu.removeAttr('style');
	        		}
	    		});
			});
		</script>
		<!----//End-top-nav-script---->
				
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-70081175-2', 'auto');
  ga('send', 'pageview');

</script>

								
	</head>
	<body>
		<div class="main-header">
		<!----- start-header---->
<body>
		<div class="main-header">
		<!----- start-header---->
		<div id="home" class="header">
					<div class="top-header">
						<div class="container">
						<div class="logo">
							   <img src="../images/logo.svg" width="90%" alt="Crowdjury Logo">
						</div>
						<!----start-top-nav---->
						 <nav class="top-nav navbar-static-top">
							<ul class="top-nav">
								<li class="active"><a href="../#home" class="scroll">Home </a></li>
								<li><a href="../#about" class="scroll" lang="en">What is</a></li>
								<li><a href="../#services" class="scroll" lang="en">How it works</a></li>
								<li><a href="../#portfolio" class="scroll" lang="en">Applications</a></li>
								<li><a href="../#team" class="scroll" lang="en">Team</a></li>
								<li><a href="../#contact" class="scroll" lang="en">Contact</a></li>
		<li>					
					<a href="#" lang="en" onclick="window.lang.change('es'); return false;">	<button  lang="en" type="button" class="btn btn-la">
  <span class="glyphicon glyphicon-globe" aria-hidden="true"></span> Español
</button>	</a></li>								
								
							</ul>
							<a href="#" id="pull"><img src="../images/menu-icon.png" title="menu" /></a>
						</nav>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>

			
		<!----- //End-header---->
					    <div  id="top" class="callbacks_container">
	<div class="tittle-head">
	<h1 lang="en">Justice For All</h1>			        	
			        	
			        					<p lang="en">A judicial system for the collaboration era</p>
			          		<div class="learn-button">
			          			<a class="slide-btn scroll" href="#help">I  want to help</a>
			          		</div>
			          	</div>
			          	<a class="kleroterion-btn popup-with-zoom-anim" href="#que-es"><span> </span></a>
			    <div id="que-es" class="mfp-hide">
					<h2 lang="en"> what is the background image?</h2>
<p lang="en"> The background image is a Ekklesiasterion (ἐκκλησιαστήριον), the auditorium where the Assembly met and where Athenians held their trials.</p>
<p lang="en"> Ancient Greeks knew that corruption posed a serious threat to their judicial system. To minimize such risk, juries were made of tens or hundreds of people randomly chosen shortly before the trial. A judge or a small court can be bribed. But it’s harder to bribe a crowd.
But how can a large jury deliberate and issue a verdict? How can someone who is not an expert in forensic techniques evaluate complex evidence?</p>
<p lang="en">Athenian jury system relied on reputation. Jurors defined their vote guided by following the experts on which they trusted. The architecture of the Ekklesiasterion was optimized for each participant to see all the others and quickly find their trusted expert in each subject.
Greek justice system combined the advantages of a large jury, a reputation system and low corruption.</p>
<p lang="en">CrowdJury is based on similar principles, adapted to the digital age.</p>
				</div></div> 
			    <div class="clearfix"> </div>
			    </div>
			    </div>
			<!----- //End-slider---->
			<div id="about" class="about">
				<div class="container">
					<div class="about-head">
						<h3 lang="en">Decentralized system of justice</h3>
						<div class="col-md-12 text-center">
						<div class="col-md-8">
						<h4 lang="en">Crowdsourcing the judicial system</h4>
						<p lang="en">CrowdJury is an open source platform which crowdsources every step of the judicial process: crime reporting, evidence appraisal, trial and jury verdict.</p>
</div>
<div class="col-md-4">
					<img src="../images/TOS-UI-English.png" width="75%" alt="CrowdJury plataform"></div>
					</div><div class="col-md-12 text-center">									
<div class="col-md-4">
					<img src="../images/TOS-Profile.png" width="75%" alt="CrowdJury plataform"></div>							
							<div class="col-md-8">
							<h4 lang="en">Humanistic Justice</h4>
							<span>CrowdJury is based on restorative justice.</span> <p>Justice in which the individual victim plays a fundamental role and can benefit from a form of restitution or reparation by the responsible or perpetrator.</p>
							</div>		
							</div><div class="col-md-12 text-center">					
							<div class="col-md-8">
							<h4 lang="en">Do well by doing good</h4>
<p lang="en">Jurors and Researchers from the crowd are rewarded with CrowdJury Coins. You help do good, you earn money.</p>
					</div>
				<div class="col-md-4">
					<img src="../images/TOS-coins-UI.png" width="75%" alt="CrowdJury plataform"></div>
					</div></div>
				</div>
				
			</div>
			<!----- //End-about---->
			<div id="services" class="services">
       		<div class="container">
       		   <div class="gallery-head text-center">
				  <h3 lang="en">How It Works</h3>
				 
			    </div>
       			<div class="row text-center feature">
       				<div class="col-md-4 service_grid">
       					<img src="../images/Crimen.svg" alt="Crime">
       					<h3 lang="en">Wrongdoing</h3>
       					<p lang="en">John, a civil servant, discovers that this boss, the Secretary, takes bribes from government contractors.</p>
       				</div>
       				<div class="col-md-4 service_grid">
       				<img src="../images/Denuncia.svg" alt="">
       					<h3 lang="en">Report</h3>
				 <p lang="en">John reports the crime on the CrowdJury platform.</p>
				 </div>
       				<div class="col-md-4 service_grid">
       					<img src="../images/Investigation.svg" alt="Investigation">
				 <h3 lang="en">Evidence Discovery</h3>
				 <p lang="en">Evidence is preserved in a cryptographically secure vault. Other witnesses are invited to testify.</p>
       				</div>
       				</div>
       			<div class="row text-center feature">
       				<div class="col-md-4 service_grid">
       					<img src="../images/Evaluation.svg" alt="Evaluation">
       					<h3 lang="en">Fact Checking</h3>
<p lang="en">Evidence is analyzed by self-selected experts from the crowd.</p>
				 </div>
       				<div class="col-md-4 service_grid">
       				<img src="../images/Juicio.svg" alt="Trial">
       					<h3 lang="en">Trial</h3>
<p lang="en">The trial takes place entirely online. Any user can interrogante the defendant and comment on the evidence.</p>
       					</div>
       				<div class="col-md-4 service_grid">
       					<img src="../images/Veredicto.svg" alt="Veredict">
       					<h3 lang="en">Veredict</h3>
				<p lang="en">A collective jury of random people from the crowd decides whether the defendant is guilty or not.</p>      				</div>
</div>
<div class="col-md-6 col-md-offset-3 service_grid text-center">
       					<img src="../images/Retribution.svg" alt="Retribution">
       					<h3 lang="en">Pay</h3>
				<p lang="en">Crowdcoins are issued to reward all that helped by reporting the crime, gathering and analyzing evidence, and worked as jurors.</p>      				</div>       			
       			
       			</div>
       		</div>
       	</div>
	 <div class="portfolio">
	 	<div class="container">
	 		<div class="potrfolio-head">
	 		<h2 lang="en">Want to know more?</h2>
				 <a lang="en" class="slide-btn" href="https://medium.com/@federicoast/the-crowdjury-a-crowdsourced-court-system-for-the-collaboration-era-66da002750d8">Read the white paper!</a>
			 </div>
		</div>
	</div>
			 
 	<div id="portfolio" class="potrfolio-content">
 		<div class="container">
 			<div class="port-head">
 				<h3>Where CrowdJury can help</h3>
 			
 			</div>
					<script>
							    $(document).ready(function() {
							      $("#owl-demo1").owlCarousel({
							        items : 1,
							        lazyLoad : true,
							        autoPlay : true,
							        navigation : true,
							        navigationText :  false,
							        pagination : false,
							      });
							    });
							    </script>
 <!-- start content_slider -->
 
						       <div id="owl-demo1" class="owl-carousel">
							   
					                <div class="item">
					                	<div class="recent-news-grid">
					                		<div class="col-md-4 recent-news-grid-left">
					                			<div class="recent-news-grid-left-grids">
					                				<div class="recent-news-grid-left-grid">
					                					<img src="../images/corrup.png" title="Governments" />
					                				</div>					                				
					                				<div class="clearfix"> </div>
					                			</div>
					                		</div>
					                		<div class="recent-news-grid-right">
					                			<h2>Governments</h2>
					                			<p>A tool to help the administration of justice in any country</p>
											</div>
					                		<div class="clearfix"> </div>
					                	</div>
					                </div>
					                <div class="item">
					                	<div class="recent-news-grid">
					                		<div class="col-md-4 recent-news-grid-left">
					                			<div class="recent-news-grid-left-grids">
					                				<div class="recent-news-grid-left-grid">
					                					<img src="../images/comer.png" title="comercio" />
					                				</div>					                				
					                				<div class="clearfix"> </div>
					                			</div>
					                		</div>
					                		<div class="recent-news-grid-right">
					                			<h2>E-Commerce</h2>
					                			<p>A judicial system for e-commerce platforms such as eBay or Coinbase Exchange.</p>
 					                		</div>
					                		<div class="clearfix"> </div>
					                	</div>
					                </div>
					               <div class="item">
					                	<div class="recent-news-grid">
					                		<div class="col-md-4 recent-news-grid-left">
					                			<div class="recent-news-grid-left-grids">
					                				<div class="recent-news-grid-left-grid">
					                					<img src="../images/casa.png" title="comercio" />
					                				</div>					                				
					                				<div class="clearfix"> </div>
					                			</div>
					                		</div>
					                		<div class="recent-news-grid-right">
					                			<h2>Private Cities</h2>
					                			<p> A justice system for private cities such as India’s Gurgaon.</p>
 					                		</div>
					                		<div class="clearfix"> </div>
					                	</div>
					                </div>
					                <div class="item">
					                	<div class="recent-news-grid">
					                		<div class="col-md-4 recent-news-grid-left">
					                			<div class="recent-news-grid-left-grids">
					                				<div class="recent-news-grid-left-grid">
					                					<img src="../images/countries.png" title="Countries" />
					                				</div>					                				
					                				<div class="clearfix"> </div>
					                			</div>
					                		</div>
					                		<div class="recent-news-grid-right">
					                			<h2>Countries</h2>
					                			<p> The formal judicial system of countries like Liberland</p>
 					                		</div>
					                		<div class="clearfix"> </div>
					                	</div>
					                </div>
				              </div>
						<!--//sreen-gallery-cursual---->
				</div>

			 </div>
	 	 </div>
	 	 <!-- end portafolio -->
	 	 
	 	 <div id="team" class="team">
	 	 	<div class="container">
	 	 		<div class="team-head">
	 	 			<h3>The Team</h3>
 					<p>We are a passionate cross-discipline team with expertise in politics, economics, legal philosophy, startups, coding, design and blockchain. We’ve come together with a world-changing goal: reimagining the judicial system for the collaboration era.</p>
	 	 		</div>
       			<div class="row text-center teams">
       				<div class="col-md-4 team_grid">
       					<div class="view2">
							 <a href="https://about.me/federicoast"><img src="../images/fast.jpg" />
						
							</div>
       					<h3>Federico Ast</h3></a>
       					
       				</div>
       				<div class="col-md-4 team_grid">
       				<div class="view2">
							<a href="ttps://twitter.com/asewrjugin"> <img src="../images/asewr.jpg" />
							</div>
       					<h3>Alejandro Sewrjugin</h3></a>
       				</div>
       				<div class="col-md-4 team_grid">
       					<div class="view2">
							<a href="https://twitter.com/GonzaStp"> <img src="../images/gstupe.jpg" />
													</div>
       					<h3>Gonzalo Stupenengo</h3></a>
       						</div>
       				</div>
       			<div class="row text-center teams">
       			<div class="col-md-4 team_grid">
       					<div class="view2">
							 <a href="https://twitter.com/eliooses"><img src="https://pbs.twimg.com/profile_images/437690661035200512/szhR4ipx.png" />
															</div>
       					<h3>Elio Oses</h3></a>
       				
       				</div>
       		<div class="col-md-4 team_grid">
       					<div class="view2">
							<a href="https://twitter.com/fran_indio"> <img src="../images/fgomezs.jpeg" />
							</div></a>
       					<h3>Francisco Gomez Salaverri</h3>
       				</div>
       				<div class="col-md-4 team_grid">
       					<div class="view2">
							<a href="https://twitter.com/Juancruzdimaio"> <img src="../images/jcdmaio.jpg" />
												</div>
       					<h3>Juan Cruz Di Maio</h3></a>
       					       				</div>
       				</div>
       		</div>
       			</div>
       			 	 
	 	 <!-- end team -->
	 	  <div class="contact" id="help">
	 	  	<div class="container">
	 		<div class="contact-head">
		 		<h3>HELP US!</h3> 
		 		<!---pop-up-box---->
					  <script type="text/javascript" src="../js/modernizr.custom.min.js"></script>    
					<link href="../css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
					<script src="../js/jquery.magnific-popup.js" type="text/javascript"></script>
					<!---//pop-up-box---->
				 <a class="slide-btn popup-with-zoom-anim" href="#small-dialog">HOW?</a>
				<div id="small-dialog" class="mfp-hide">
					<h3>Are you a dev?</h3> <p>Help us, code CrowdJury!</p>
<h3>Are you a video maker?</h3> <p>Help us, make a short video to explain our goal.</p>
 
<h3>Are you a journalist?</h3> <p>Write a story!</p>

<h3>Are you an investor?</h3> <p>Help us, raise money to develop CrowdJury!</p>

<h3>Can you write?</h3> <p>Help us translate our website into your language!</p>


<h3>There are many other ways in which you can help.<br/> Share it! Help us spread the word!</h3>
									<div class="footer-icons">
										<ul class="soc_icons unstyled-list list-inline">
										<li><a href="https://www.facebook.com/CrowdJury"><i class="icon_1"></i></a></li>
											<li><a href="https://twitter.com/CrowdJury"><i class="icon_2"></i></a></li>
											<div class="clearfix"> </div>
										</ul>
									</div>
				</div>
				<script>
						$(document).ready(function() {
						$('.popup-with-zoom-anim').magnificPopup({
							type: 'inline',
							fixedContentPos: false,
							fixedBgPos: true,
							overflowY: 'auto',
							closeBtnInside: true,
							preloader: false,
							midClick: true,
							removalDelay: 300,
							mainClass: 'my-mfp-zoom-in'
						});
																						
						});
				</script>			
			 </div>
			</div>
	 	  </div>
	  
	 	  
	 	   <div id="contact" class="feedback">
	 	   		<div class="container">
	 	   			<div class="feed-head">
	 	 			<h3>Join Us </h3>
 					<p>Leave us your message, and join us.</p>
	 	 		</div>
	 	 		<div class="feed-contact">
				 	 			<div class="col-md-8 contact-form">
											<form method="post" class="contact-form">
												<input type="text" class="textbox" name="name" value="Name" onfocus="this.value = '';">
												<input type="text" class="textbox" name="email" value="E-mail" onfocus="this.value = '';">
												<textarea value="How can you help?" name="message" onfocus="this.value = '';">How can you help?</textarea>
												<input type="submit" name="boton" value="Collaborate" >
											</form>
											 <div class="col-md-6"><?php echo $result; ?></div>
											 
								</div>
								<div class="col-md-4 address">
										<h4>CrowdJury</h4>
										<p>Justice for all</p>
										<p>OpenSource Project</p><br>
										<p><a href="mailto:info@CrowdJury.org" >info@CrowdJury.org</a></p>
									<div class="footer-icons">
										<ul class="soc_icons unstyled-list list-inline">
										<li><a href="https://www.facebook.com/CrowdJury"><i class="icon_1"></i></a></li>
											<li><a href="https://twitter.com/CrowdJury"><i class="icon_2"></i></a></li>
											<div class="clearfix"> </div>
										</ul>
									</div>
								</div>
								<div class="clearfix"> </div>
						</div>
					</div>
				</div>
				<div class="footer">
						<div class="container">
							<div class="logo2">
								   <img src="../images/logo.svg" alt="CrowdJury logo" width="70%"></div>
									<div class="copy-right">
								<p>Let's build a world of justice together</p>
							</div>								
							<div class="clearfix"> </div>
						</div>	
				</div>	

				<script type="text/javascript">
									$(document).ready(function() {
										/*
										var defaults = {
								  			containerID: 'toTop', // fading element id
											containerHoverID: 'toTopHover', // fading element hover id
											scrollSpeed: 1200,
											easingType: 'linear' 
								 		};
										*/
										
										$().UItoTop({ easingType: 'easeOutQuart' });
										
									});
								</script>
					<a href="../#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
</body>
<script>
  window.intercomSettings = {
    app_id: "u8zx6zhn",
    name: "Nikola Tesla", // Full name
    email: "nikola@example.com", // Email address
    created_at: 1312182000 // Signup date as a Unix timestamp
  };
</script>
<script>(function(){var w=window;var ic=w.Intercom;if(typeof ic==="function"){ic('reattach_activator');ic('update',intercomSettings);}else{var d=document;var i=function(){i.c(arguments)};i.q=[];i.c=function(args){i.q.push(args)};w.Intercom=i;function l(){var s=d.createElement('script');s.type='text/javascript';s.async=true;s.src='https://widget.intercom.io/widget/u8zx6zhn';var x=d.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);}if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})()</script>
</html>