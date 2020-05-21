<?php

$events = array(
"comforts-of-home" => "https://teams.microsoft.com/l/meetup-join/19%3ameeting_MTJmZGFjMzctOWMwMC00OTM4LTg1ZTctNTE0OGIzYjAxYmI3%40thread.v2/0?context=%7B%22Tid%22%3A%22b4253cf3-23c3-4e23-b151-0c32273cd7c5%22%2C%22Oid%22%3A%225ffbd509-f517-461d-be76-14c287850a75%22%2C%22IsBroadcastMeeting%22%3Atrue%7D",
"restore-and-reflect" => "https://teams.microsoft.com/l/meetup-join/19%3ameeting_MGM3ZDYzNTEtYTgxOS00NTJhLWFmNzEtMDMyODQxZTc5YjM4%40thread.v2/0?context=%7B%22Tid%22%3A%22b4253cf3-23c3-4e23-b151-0c32273cd7c5%22%2C%22Oid%22%3A%225ffbd509-f517-461d-be76-14c287850a75%22%2C%22IsBroadcastMeeting%22%3Atrue%7D",
"desktop-dialogues-healing-and-heritage" => "https://teams.microsoft.com/l/meetup-join/19%3ameeting_MDg4YWRhZjctMTJiMS00YTFiLTkzNmItZGU0MDcyZDEyYTBm%40thread.v2/0?context=%7b%22Tid%22%3a%22b4253cf3-23c3-4e23-b151-0c32273cd7c5%22%2c%22Oid%22%3a%225ffbd509-f517-461d-be76-14c287850a75%22%2c%22IsBroadcastMeeting%22%3atrue%7d",
"desktop-dialogues-care" => "https://teams.microsoft.com/l/meetup-join/19%3ameeting_Y2I1Zjc5ODctZmE5OC00NDliLWI1MTktY2M3ZTQyNzExMmU2%40thread.v2/0?context=%7b%22Tid%22%3a%22b4253cf3-23c3-4e23-b151-0c32273cd7c5%22%2c%22Oid%22%3a%225ffbd509-f517-461d-be76-14c287850a75%22%2c%22IsBroadcastMeeting%22%3atrue%7d"
);

$event_key = $_GET['e'];
$link = ((!empty($event_key) && array_key_exists($event_key, $events)) ? $events[$event_key] : null);

?>
<html>
 <head>
 	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">	
 	<script type="text/javascript">
	<!--//--><![CDATA[//><!--
		(function(i,s,o,g,r,a,m){i["GoogleAnalyticsObject"]=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,"script","https://www.google-analytics.com/analytics.js","ga");ga("create", "UA-4110574-1", {"cookieDomain":".clevelandart.org"});ga("send", "pageview");
	//--><!]]>
	</script>
	<script type="text/javascript">
	<!--//--><![CDATA[//><!--

	    window.dataLayer = window.dataLayer || [];
	    function gtag(){dataLayer.push(arguments);}
	    gtag('js', new Date());
	    gtag('config', 'AW-728479521');
	    
	//--><!]]>
	</script>    

  	<title>Cleveland Museum of Art - Home Is Where The Art Is - Events</title>
	
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="stylesheet" href="css/bootstrap.min.css" media="all"/>
 </head>
 <body>

	<div class="header">
		<a href="/home">
			<div class="site-name-1">The Cleveland Museum of Art</div>
			<img class="site-logo" src="img/logo.png"/>
		</a>
	</div>
	<div class="container">
		<div class="row">
			<div class="col col-sm-1 col-md-1"></div>
			<div class="center-channel col col-sm-10 col-md-10">
				<?php if (!empty($link)) { ?>
				<h2 class="kusama">You will be redirected to your event shortly.</h2>

				<h2 class="kusama">If you are not automatically redirected, click the link below.</h2>

				<div class="row body-channel">
					<div class="col col-sm-3"></div>
					<div class="col col-sm-6 skip-link">
						<a href="<?php echo $link; ?>">
							<span class="header-website-link">Go to Event</span>
						</a>						
					</div>
					<div class="col col-sm-3"></div>
				</div>	
				<?php } else { ?>
				<h2 class="kusama">Sorry, this event does not exist.</h2>

				<div>If you believe this is a mistake, please email 
					<a href="mailto:help.tickets@clevelandart.org">help.tickets@clevelandart.org</a>
				</div>
				<?php } ?>			

			</div>
			<div class="col col-sm-1 col-md-1"></div>
		</div>
	</div>

	<script type="text/javascript" src="https://www.googletagmanager.com/gtag/js?id=AW-728479521"></script>	
	<?php if (!empty($link)) { ?>
	<script type="text/javascript">
		setTimeout(function() {
		    window.location.replace("<?php echo $link; ?>");
		}, 3000);
	</script>
<?php } ?>
 </body>
</html>
