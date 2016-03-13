<?php

/*
	skype: Elementum
	vk: https://vk.com/e1ementum
*/



	define('SUBF', '/');
	define('PAGE_VERSION', 0);

	date_default_timezone_set('UTC');
	define('VERSION_SUFFIX', PAGE_VERSION == 0 ? '' : '?vers=' . PAGE_VERSION);

	include('jas-5.4.0/jas.php');
	jas::$path = SUBF . 'jas-5.4.0/';
	jas::utm_save('/');
	jas::dev();

?><!DOCTYPE html>
<!--
	skype: Elementum
	vk: https://vk.com/e1ementum
-->
<html lang="ru">
	<head>
		<meta charset="UTF-8">
		<?php jas::style(); ?>
		<link rel="stylesheet" type="text/css" href="css/style.css" media="all" />
		<link rel="stylesheet" type="text/css" href="css/jas-default.css" media="all" />
		<?php jas::script(); ?>
		<script src="<?=SUBF?>js/script.js<?=VERSION_SUFFIX?>"></script>
		<link rel="icon" type="image/png" href="<?=SUBF?>favicon-32x32.png" sizes="32x32" />
		<link rel="icon" type="image/png" href="<?=SUBF?>favicon-16x16.png" sizes="16x16" />
		<title>Title</title>
	</head>
	<body>
		<div class="screen">
			<div class="header">
				<div class="content">
					<div class="b1">
						<div class="logo"></div>
					</div>
					<div class="b2">
						<div class="menu jas_noselect">
							<div class="t1 v1 jas_noselect"><span>Home</span></div>
							<div class="t1 v2 jas_noselect"><span>About Me</span></div>	
							<div class="t1 v3 jas_noselect"><span>Portfolio</span></div>
							<div class="t1 v4 jas_noselect"><span>Blog</span></div>
							<div class="t1 v5 jas_noselect"><span>Contact</span></div>	
					</div>
					</div>
				</div>
			</div>
			<div class="p1">
				<div class="content">
					<div class="b1">
						<div class="t1">Recent Work</div>
						<div class="t2">1stwebdesigner.com</div>
					  	<div class="t3">Curabitur pulvinar augue at leo mollis <br> varius. Etiam feugiat tempus bibendum. <br> Nulla vitae mattis sem. Vivamus iaculis <br> fermentum turpis.</div>
					  	<div class="btn1">Read more..</div>
					</div>
				</div>
			</div>
			<div class="p2">
				<div class="content">
					<div class="t1">What I Do</div>
					<div class="b1">
						<div class="b2 v1">
							<div class="t2">I Capture Smiles</div>
							<div class="i1 v1"></div>
							<div class="t3">Lorem ipsum dolor sitamt <br> consectetur adipiscing elit <br> Ut odio lorem.</div>
							<div class="btn2_v1">Read more..</div>
						</div>
						<div class="b2 v1 b2 v2">
							<div class="t2">I Design Websites</div>
							<div class="i1 v1 i1 v2"></div>
							<div class="t3">Nam eget libero tellus. <br> Quisque elementum arcu <br> ut dapibus.</div>
							<div class="btn2_v1 btn2_v2">Read more..</div>
						</div>
						<div class="b2 v1 b2 v3">
							<div class="t2">Awards I Recieve</div>
							<div class="i1 v1 i1 v3"></div>
							<div class="t3">Donec euismod dapibus <br> faucibus. Donec nec <br> cursus sapien.</div>
							<div class="btn2_v1 btn2_v3">Read more..</div>
						</div>						
						<div class="b2 v1 b2 v4">
							<div class="t2">I Love to Socialize</div>
							<div class="i1 v1 i1 v4"></div>
							<div class="t3">Morbi vehicula, felis nec <br> vehicula vulputate, lacus <br> tellus mattis.</div>
							<div class="btn2_v1 btn2_v4">Read more..</div>
						</div>	
					</div>
				</div>
			</div>
			<div class="p3">
				<div class="content">
					<div class="b1">
						<div class="t1">About Me</div>
						<div class="t2"> <p>Donec non pharetra diam.Morbi vehicula, felis nec vehicula vulputate, lacus tellus mattis tortor, vel tempus velit sem non massa.</p> <p>Ut ante velit, varius et euismod sed, euismod ac sapien. Nunc interdum varius sem, et interdum nisl viverra sed. Nam eget libero tellus. Quisque elementum suscipit arcu ut dapibus. Donec euismod dapibus faucibus. Donec nec cursus sapien. Fusce at viverra nunc. Ut ante velit, varius et euismod sed, euismod ac sapien. Nunc interdum varius sem, et interdum nisl viverra sed. Nam eget libero tellus. Quisque elementum suscipit arcu ut dapibus.</p></div>	
						<div class="t3"> <p>Suspendisse bibendum turpis vitae nibh blandit pretium. Vestibulum et ante ut turpis gravida faucibus. Maecenas tortor nunc, accumsan nec aliquam et, feugiat at elit. Curabitur interdum elit pellentesque elit egestas fringilla. Donec imperdiet, enim in congue fermentum, nibh sapien sagittis sapien, nec varius nulla quam iaculis erat. Praesent ac vestibulum lorem. Nunc nunc turpis, rutrum ut fermentum et, accumsan a urna. Nulla facilisi.</p>
							<div class="btn2_v1 btn2_v5">Read more..</div>
						</div>
					</div>
					<div class="b2">
						<div class="t1_v2">My Portfolio</div>
						<div class="i1"></div>
					</div>
					<div class="b3">
						<div class="i2"></div>
						<div class="t4">Donec non pharetra diam.Morbi vehicula, felis nec vehicula vulputate, <br> lacus tellus mattis tortor, vel tempus velit sem non massa.</div>
					</div>
					<div class="b4">
						<div class="t5">Website Url: <br> Client: <br> Date: <br> Task: <br> Tools:	</div>
						<div class="t6"><span style="color: #b6aeff; cursor: pointer;">http://3dbox.com/</span> <br> Unknown <br> December 2010 <br> Design, Front-end Development, WordPress Integration <br> Photoshop, Dreamweaver </div>
					</div>
					<div class="jas_clear"></div>
				</div>
			</div>
			<div class="footer">
				<div class="content">
					<div class="t1">Copyright 2010 <span style="color: #b6aeff; cursor: pointer;">1stwebdesigner.com,</span>  All Rights Reserved</div>
					<div class="b1">
						<div class="menu jas_noselect">
							<div class="t2 v1 jas_noselect"><span>Home</span></div>
							<div class="t2 v2 jas_noselect"><span>About Me</span></div>	
							<div class="t2 v3 jas_noselect"><span>Portfolio</span></div>
							<div class="t2 v4 jas_noselect"><span>Blog</span></div>
							<div class="t2 v5 jas_noselect"><span>Contact</span></div>	
					</div>
					</div>					
				</div>
			</div>
		</div>
	</body>
</html>
