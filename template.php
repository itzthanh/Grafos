<!DOCTYPE html>
<html data-wf-page="58b3b2baddad4bdd212fdcbe" data-wf-site="58a133d3939b3ae4754a87cc" data-wf-page="58b3b42eceab253c48c9959d" data-wf-page="58b598d72b3466d235baeb14">
	<head>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Grafos</title>
		<meta content="Grafos" property="og:title">
 	 	<meta content="width=device-width, initial-scale=1" name="viewport">
  		<meta content="Webflow" name="generator">
  		<link href="https://fonts.googleapis.com/css?family=Droid+Sans" rel="stylesheet">
 		<link href="css/normalize.css" rel="stylesheet" type="text/css">
  		<link href="css/webflow.css" rel="stylesheet" type="text/css">
  		<link href="css/test-632284.webflow.css" rel="stylesheet" type="text/css">
  		<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js"></script>
  		<script type="text/javascript">
    		WebFont.load({
      		google: {
        		families: ["Droid Sans:400,700","Open Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic","Montserrat:400,700"]
      		}
    		});
  		</script>
  		<script src="js/modernizr.js" type="text/javascript"></script>
  		<link href="images/webclip-32.png" rel="shortcut icon" type="image/x-icon">
  		<link href="images/webclip.png" rel="apple-touch-icon">
  		<style>
    		/* Global Checkbox */
    		input[type="checkbox"]:checked + label {
      		background-image:url("https://daks2k3a4ib2z.cloudfront.net/58a133d3939b3ae4754a87cc/58b76cfedc1c732523193fe1_check.svg");
    		}
  		</style>
		<!--CSS-->
		<?php //include "stylesheets.php"; ?>
	</head>
	<body>
	<div id="mainContainer">
		<!--Common Header-->
		<div id="headerTemplate">
		<?php include "header.php"; ?>
		</div>
		<div id="contentTemplate">
		<section>
			<!--Content of page goes here and is determined by $this_page value-->
			<?php include "html_content/content_$this_page"; ?>
		</section>
		</div>
		<!--Common Footer-->

		<!--JS-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js" type="text/javascript"></script>
  		<script src="js/webflow.js" type="text/javascript"></script>
		<?php include "scripts.php"; ?>

	</div>
		<div id="footerTemplate">
			<?php //include "html_content/content_footer.php";?>
		</div>
	</body>
</html>