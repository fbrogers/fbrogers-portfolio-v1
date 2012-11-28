<?php
	error_reporting(0);
	require_once 'includes/phpFlickr.php';
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
	<title>firstbornrogers.com</title>
	
	<style type="text/css">@import 'style.css';</style>  
	<link rel="stylesheet" href="fancybox/jquery.fancybox.css" type="text/css" />
	<link rel="stylesheet" href="shadowbox/shadowbox.css" type="text/css" />
	<link rel="shortcut icon" href="favicon.ico" />
	
	<script type="text/javascript" src="scripts/jquery-1.3.2.min.js"></script>
	<script type="text/javascript" src="scripts/jquery.tools.min.js"></script>
	<script type="text/javascript" src="scripts/jquery.cycle.js"></script>
	<script type="text/javascript" src="scripts/jquery.easing.js"></script>
	<script type="text/javascript" src="fancybox/jquery.fancybox.js"></script>
	<script type="text/javascript" src="shadowbox/src/adapter/shadowbox-base.js"></script>
	<script type="text/javascript" src="shadowbox/src/shadowbox.js"></script>	
	<script type="text/javascript" src="scripts/custom.js"></script>
	<script type="text/javascript">
		Shadowbox.loadSkin('classic', 'shadowbox/src/skin');
		Shadowbox.loadLanguage('en', 'shadowbox/src/lang');
		Shadowbox.loadPlayer(['flv', 'html', 'img', 'swf'], 'shadowbox/src/player');
		
		window.onload = function(){		
			Shadowbox.init();			
		};
	</script>

	<script type="text/javascript">
		var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
		document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
	</script>

	<script type="text/javascript">
		try {
		var pageTracker = _gat._getTracker("UA-2185687-7");
		pageTracker._trackPageview();
		} catch(err) {}
	</script>
</head>

<body>
	<div id="top"></div>

	<div id="slit">
		<a href="#" class="button" onclick="return false;" id="favorite"></a>
		<div class="tooltip"><h1>Web</h1></div>
		
		<a href="#" class="button" onclick="return false;" id="flickr"></a>
		<div class="tooltip"><h1>Photography</h1></div>
		
		<a href="#" class="button" onclick="return false;" id="youtube"></a>
		<div class="tooltip"><h1>Video Work</h1></div>
		
		<a href="#" class="button" onclick="return false;" id="imgspark"></a>
		<div class="tooltip"><h1>Graphic Design</h1></div>
		
		<a href="#" class="button" onclick="return false;" id="linkedin"></a>
		<div class="tooltip"><h1>About Me</h1></div>
	</div>

	<div id="content">
		<div id="section_imgspark" class="box" style="display:none">
			<h1>Graphic Design</h1>
			<ul class="fancy">
			<?php 
				$f = new phpFlickr("78129c3974ffe89d3127cfa07c06cc2e"); 
			
				$person = $f->people_findByUsername("fbrogers-art");
				$photos_mine = $f->photos_search(array("user_id"=>$person['id'], "per_page"=>22));
				
				foreach ((array)$photos_mine['photo'] as $photo) {
					// Build image and link tags for each photo
					echo '<li><a rel="tag" class="fancy" title="'.$photo[title].'" href="' . $f->buildPhotoURL($photo, "medium") . '">';
					echo '<img class="icon" alt="'.$photo[title].'" '.
						'src="' . $f->buildPhotoURL($photo, "Square") . '" />';
					echo "</a></li>";
				}
			?>
			</ul>
		</div>

		<div class="divider"></div>
	
		<div id="section_flickr" class="box" style="display:none">
			<h1>Photography</h1>
			<ul class="fancy">
			<?php 
				$f = new phpFlickr("78129c3974ffe89d3127cfa07c06cc2e"); 
			
				$person = $f->people_findByUsername("fbrogers");
				$photos_mine = $f->photos_search(array("user_id"=>$person['id'], "tags"=>"portfolio", "per_page"=>33));
				
				foreach ((array)$photos_mine['photo'] as $photo) {
					// Build image and link tags for each photo
					echo '<li><a rel="tag" class="fancy" title="'.$photo[title].'" href="' . $f->buildPhotoURL($photo, "large") . '">';
					echo '<img class="icon" alt="'.$photo[title].'" '.
						'src="' . $f->buildPhotoURL($photo, "Square") . '" />';
					echo "</a></li>";
				}
			?>
			</ul>
		</div>
		
		<div class="divider"></div>
						
		<div id="section_youtube" class="box" style="display:none">
			<h1>Video Production</h1>
			<div id="icons">
				<img src="images/iconv1.jpg" class="iconVideo" alt="v1" title="DJ Dr. Thunder" />
				<img src="images/iconv3.jpg" class="iconVideo" alt="v3" title="Charles Miles' 2005 Honda Element" />
				<img src="images/iconv4.jpg" class="iconVideo" alt="v4" title="Richie's 2007 Mitsubishi Evo IX" />
				<img src="images/iconv5.jpg" class="iconVideo" alt="v5" title="Hands on Perfection" />
				<img src="images/iconv6.jpg" class="iconVideo" alt="v6" title="Night" />
				<img src="images/iconv7.jpg" class="iconVideo" alt="v7" title="A Better Place" />
				<img src="images/iconv8.jpg" class="iconVideo" alt="v8" title="Piano After War" />
			</div>
			
			<div id="v1" class="videoBox">
				<a href="flv/djDrThunder.flv" rel="shadowbox;width=640;height=430" class="sbox" title="DJ. Dr. Thunder"><img src="images/djdrthunder.jpg" class="piccie" alt="DJ Dr. Thunder" /></a>

				<h2>DJ Dr. Thunder</h2>

				<p>For Enginehead.com (April Fools Edition)</p>

				<h2>Software Used:</h2>

				<p>Premiere CS3<br />
				After Effects CS3<br />
				Illustrator CS3</p>

				<p>Click to the picture to view.</p>
			</div>
							   
			<div id="v3" class="videoBox">
			<a href="flv/pioneer.elementHD_480p.flv" rel="shadowbox;width=630;height=360" class="sbox" title="Charles Miles' 2005 Honda Element"><img src="images/pioneer.jpg" class="piccie" alt="Charles Miles' 2005 Honda Element" /></a>
				<h2>Charles Miles' 2005 Honda Element</h2>
				<p>For Enginehead.com</p>
				<h2>Software Used:</h2>
				<p>Avid Pro 4<br />
				<p><em>Click to the picture to view.</em></p>
			</div>
					
			<div id="v4" class="videoBox">
			<a href="flv/richies.flv" rel="shadowbox;width=630;height=360" class="sbox" title="Richie's 2007 Mitsubishi Evo IX"><img src="images/evox.jpg" class="piccie" alt="Richie's 2007 Mitsubishi Evo IX" /></a>
				<h2>Richie's 2007 Mitsubishi Evo IX</h2>
				<p>For Enginehead.com</p>
				<h2>Software Used:</h2>
				<p>Final Cut Pro<br />
				Compressor
				<p><em>Click to the picture to view.</em></p>
			</div>
			<div id="v5" class="videoBox">
				<iframe src="http://player.vimeo.com/video/10777103?byline=0&amp;portrait=0" width="500" height="281"></iframe>
			</div>
			<div id="v6" class="videoBox">
				<iframe src="http://player.vimeo.com/video/10777182?byline=0&amp;portrait=0" width="500" height="375"></iframe>
			</div>
			<div id="v7" class="videoBox">
				<iframe src="http://player.vimeo.com/video/10777158?byline=0&amp;portrait=0" width="500" height="281"></iframe>
			</div>
			<div id="v8" class="videoBox">
				<iframe src="http://player.vimeo.com/video/10777048?byline=0&amp;portrait=0" width="500" height="375"></iframe>
			</div>
		</div>
		
		<div class="divider"></div>
		
		<div id="section_favorite" class="box" style="display:none">
			<h1>Web Development</h1>
			
			<div class="boxgrid peek">  
				<a href="images/site_it1_full.jpg" rel="x4" class="sbox fancy"><img src="images/wthumb_site_it.jpg" alt="Tech Template" /></a>
				<div class="cover boxcaption">
					<h3>SDES IT</h3>
				</div>
			</div>    
			<div style="display: none">
				<a href="images/site_it2_full.jpg" rel="x4" class="fancy"></a>
				<a href="images/site_it3_full.jpg" rel="x4" class="fancy"></a>
			</div>   

			<div class="boxgrid peek">  
				<a href="images/site_slate1_full.jpg" rel="x3" class="sbox fancy"><img src="images/wthumb_site_slate.jpg" alt="Slate Template" /></a>
				<div class="cover boxcaption">
					<h3>Slate Template</h3>
				</div>
			</div>    
			<div style="display: none">
				<a href="images/site_slate2_full.jpg" rel="x3" class="fancy"></a>
				<a href="images/site_slate3_full.jpg" rel="x3" class="fancy"></a>
			</div>   

			<div class="boxgrid peek">  
				<a href="images/site_prestige_full.jpg" rel="x1" class="sbox fancy"><img src="images/wthumb_site_prestige.jpg" alt="Prestige Template" /></a>
				<div class="cover boxcaption">
					<h3>Prestige Template</h3>
				</div>
			</div> 
			<div style="display: none">
				<a href="images/site_oop_full.jpg" rel="x1" class="fancy"></a>
				<a href="images/site_goldenrule_full.jpg" rel="x1" class="fancy"></a>
			</div>   

			<div class="boxgrid peek">  
				<a href="images/site_training_full.jpg" rel="x2" class="sbox fancy"><img src="images/wthumb_site_training.jpg" alt="Training Template" /></a>
				<div class="cover boxcaption">
					<h3>Training Template</h3>
				</div>
			</div>    
			<div style="display: none">
				<a href="images/site_training2_full.jpg" rel="x2" class="fancy"></a>
				<a href="images/site_training3_full.jpg" rel="x2" class="fancy"></a>
			</div>   

			<div class="boxgrid peek">  
				<a href="images/site_set_full1.jpg" rel="y1" class="sbox fancy"><img src="images/wthumb_site_set.jpg" alt="SET" /></a>
				<div class="cover boxcaption">
					<h3>SET Portal</h3>
				</div>
			</div>    
			<div style="display: none">
				<a href="images/site_set_full2.jpg" rel="y1" class="fancy"></a>
				<a href="images/site_set_full3.jpg" rel="y1" class="fancy"></a>
			</div>   

			<div class="boxgrid peek">  
				<a href="images/site_springs_full1.jpg" rel="z2" class="sbox fancy"><img src="images/wthumb_site_springs.jpg" alt="Springs Traveler" /></a>
				<div class="cover boxcaption">
					<h3>Springs Traveler</h3>
				</div>
			</div>
			<div style="display: none">
				<a href="images/site_springs_full2.jpg" rel="z2" class="fancy"></a>
				<a href="images/site_springs_full3.jpg" rel="z2" class="fancy"></a>
			</div>

			<div class="boxgrid peek">  
				<a href="media/jade.swf" rel="shadowbox;width=750;height=600" class="sbox"><img src="images/wthumb_site_swf_ryan.jpg" alt="Ryan's Portfolio" /></a>
				<div class="cover boxcaption">
					<h3>Ryan's Portfolio</h3>
				</div>
			</div>

			<div class="boxgrid peek">  
				<a href="media/beta00.swf" rel="shadowbox;width=950;height=550" class="sbox"><img src="images/wthumb_site_swf_re.jpg" alt="Resident Evil" /></a>
				<div class="cover boxcaption">
					<h3>Resident Evil</h3>
				</div>
			</div>

			<div class="boxgrid peek">  
				<a href="media/dmod.swf" rel="shadowbox;width=950;height=550" class="sbox"><img src="images/wthumb_site_swf_dm.jpg" alt="Digital Media CD" /></a>
				<div class="cover boxcaption">
					<h3>Digital Media CD</h3>
				</div>
			</div>
		</div>

		<div class="divider"></div>

		<div id="section_linkedin" class="box" style="display:none">
			<h1>About Me</h1>

			<div class="text" id="me" style="text-align: left">
				<div class="boxRight" style="float: right">
					<a href="resume.pdf" onclick="window.open(this.href); return false;">
						<img src="images/meresume.jpg" class="iconVideo" alt="Me" style="margin-top: 7px" />
					</a>
					<h4>
						<a href="resume.pdf" onclick="window.open(this.href); return false;">
							More&hellip;
						</a>
					</h4>
				</div>
				
				<h1>Jordan Rogers</h1>
				<h3>Web Developer at SDES Information Technology</h3>
				<a href="resume.pdf" onclick="window.open(this.href); return false;">
					&raquo; Resume Download
				</a><br /><br />

				<h2>Education</h2>
				<p>
					University of Central Florida<br />
					Digital Media, B.A.<br />
					Concentration - Internet and Interactive Systems
				</p>
			</div>
		</div>
	</div>
</body>
</html> 