<?php
$pageTitle = 'home';
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
	<?php include('layout/head.php'); ?>
</head>
<body class="homepage">
	<?php include('inc/functions.php') ?>
	<?php include('inc/analytics.php'); ?>
	<div class="contact">
		<a href="contact.php"><p><span class="no-mobile">Contact 7AA Command</span></p></a>
	</div>
	<div id="wrapper">
		<?php include('layout/header.php'); ?>
		<div id="page">
			<div class="container">
				<div class="row">
					<div class="3u">
						<section id="sidebard2">
							<header>
								<h2>Teamspeak</h2>
							</header>
							<?php include('inc/teamspeak.php'); ?>
							<a href="ts3server://ts.7thaa.com" class="button">Join us on Teamspeak</a>
							<?php include('inc/widget-discord.php'); ?>
						</section>
					</div>

					<div class="9u skel-cell-important">
						<section id="content">
							<header>
							</header>
							<p><strong>The 7th Air Assault Brigade (7AA) is multi-national ArmA 3 Tactical Realism group; a gaming community built around Bohemia Interactive's ArmA 3. The 7AA's structure is based on the British 16th AAB, the Army's rapid response airborne formation, operating in the era of NATO's Drawback from Stratis, 2035.</strong></p>
							<p>Check out our <a href="http://bit.ly/7aa-orbat">ORBAT</a> to have a peak at the current structure of the unit.</p>
							<header>
								<h2>About us</h2>
							</header>
							<ul class="style1">
								<li><strong>Gameplay;</strong> The operations of our mission nights are designed and curated by ArmA 3- and Army veterans. These mission nights keep a realistic and serious approach on the field while maintaing the fun and banter. As an Air Assault Brigade we focus on Light Armoured Warfare such as Airborne and Recon operations.</li>
								<li><strong>Immersion;</strong> Our mods are the main factor to achieve immersion and functionality of our operations. You can find them all on the Steam Workshop, divided into collections to maintain a clear overview.</li>
								<li><strong>Community;</strong> The 7th AA too embraces its community with both arms, welcoming both players new to the game and battle hardened veterans. Both community curated mission nights and community players are no strange sight in our group. During the off hours, you can enjoy regular missions on our (3) peristent servers and banter on our Discord or Teamspeak.</li>
								<li><strong>Flexibility;</strong> Like no other we understand that players want to experience every aspect of the game. Besides our Rifleman at Core sententia, our extensive training program allows anyone to get the qualifications in their preferred field. For each mission night, a list of available roles is released and filled by player requests.</li>
								<li><strong>Activity;</strong> We host roughly 8 mission nights per calendar month on Tuesday and Thursday 18:30 BST. Members are free to choose which mission nights are attended. A fair minimum attendance of 50% of the mission nights is required.</li>
							</ul><br>
							<header>
								<h2>Requirements</h2>
							</header>
							<ul class="style1">
								<li><strong>Maturity:</strong> Players must know how to act according to the situation at hand and to mess about.</li>
								<li><strong>Communication:</strong> Every member must have a decent working microphone so we can communicate.</li>
								<li><strong>Attendance:</strong> We expect from our members to attend at least 50% of the ops, and our Sunday training sessions. If any issues arise, their commanding officer is to be informed of their absence.</li>
								<li><strong>Respect:</strong> We are looking for members who can respect our community and it's members and have fun with us.</li>
								<li><strong>Activity:</strong> We want members who will contribute to the community and enjoy playing ops.</li>
								<li><strong>Age limit:</strong> We mostly look for 18+, but we also accept younger if they prove their maturity.</li>
								<li><strong>Language:</strong> Must be able to speak fluent English.</li>
								<li><strong>Legal Arma 3 copy and Legal Arma 3 Apex (DLC) copy</strong></li>
							</ul>
							<header>
								<h2>Arma 3 servers</h2>
							</header>
							<p><strong>Global Address: arma3.7thaa.com</strong></p>
							<ul class="style4">
								<li><div>ALPHA </div><?php server1(); ?></li>
								<li><div>BRAVO </div><?php server2(); ?> </li>
								<li><div>CHARLIE </div> <?php server3(); ?></li>
								<li><div>DELTA </div><?php server4(); ?></li>
								<li><div>ECHO </div> <?php server5(); ?></li>
							</ul>
							<header>
								<h2>Addon collection</h2>
							</header>
							<ul class="style1">
								<li>Main Files (all required): <a href="http://steamcommunity.com/sharedfiles/filedetails/?id=845910510">Main Files Steam Workshop Collection</a></li>
								<li>Optional Files (Recommended for enhanced immersion): <a href="https://steamcommunity.com/sharedfiles/filedetails/?id=1237445004">Optional Files Steam Workshop Collection</a></li>
								<li>Terrain addons: <a href="https://steamcommunity.com/sharedfiles/filedetails/?id=935545021">Server Only Steam Workshop Collection</a></li>
							</ul>
							<header>
								<h2>Join Us</h2>
							</header>
							<ul class="style1">
								<li>Want to know more? Join our <a href="https://discord.gg/CTYh7z8">Discord</a> or <a href="ts3server://ts.7thaa.com">Teamspeak</a>. You can also check out our <a href="https://www.reddit.com/r/7thAA/">Subreddit</a> or <a href="https://steamcommunity.com/groups/7thaa">Steam Community Page</a>.</li>
								<li>Join us on <a href="https://units.arma3.com/unit/7AA">Bohemia Interactive's Unit Page</a> to use our identifier during operations.</li>
								<li>Want to do a joint operation between your unit and ours? Let us know!</li>
								<li>Looking for the application? Click <a href="application-form.php">here.</a></li>
							<header>
								<h2>Currently Available</h2>
							</header>
							<li><strong>1PARA:</strong> Infantry Roles Available</li>
							<li><strong>BGC:</strong> Curator roles for members and community</li>
							<li>Ground support and air support battalion in the <strong>future!</strong></li>
							</ul>
						</section>
					</div>
				</div>
			</div>	
		</div>
	</div>
	<?php include('layout/footer.php'); ?>
