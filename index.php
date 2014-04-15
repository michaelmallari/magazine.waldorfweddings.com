<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="ie6 ielt8"> <![endif]-->
<!--[if IE 7 ]> <html lang="en" class="ie7 ielt8"> <![endif]-->
<!--[if IE 8 ]> <html lang="en" class="ie8"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html lang="en"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width; initial-scale=1">
		<title>Waldorf Weddings</title>
		<meta name="robots" content="noindex, nofollow">
		<meta name="description" content="">
		<link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon">
		<link href="images/favicon.ico" rel="icon" type="image/ico">
		<link href="http://fonts.googleapis.com/css?family=Oxygen" rel="stylesheet" type="text/css">
		<link href="http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700,300italic,400italic,500italic,700italic" rel="stylesheet" type="text/css">
		<link href="http://fonts.googleapis.com/css?family=Gochi+Hand" rel="stylesheet" type="text/css">
		<link href="css/global.css" rel="stylesheet" type="text/css">
<!--[if IE 8]>
		<link href="css/ie8.css" rel="stylesheet" type="text/css">
<![endif]-->
		<script type="text/javascript">
			document.createElement('header');
			document.createElement('content');
			document.createElement('magazine');
		</script>
		<script src="http://code.jquery.com/jquery-1.7.2.min.js" type="text/javascript"></script>
		<script src="js/turn.min.js" type="text/javascript"></script>
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
				(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
				m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');


			ga('create', 'UA-6570849-1', 'michaelmallari.com');
			ga('send', 'pageview');
		</script>
	</head>


	<body id="" class="home">


<!--  begin: #wrapper  -->
		<div id="wrapper">


<!--  begin: #header  -->
			<header id="header">

			</header>
<!--  end: #header  -->




<!--  begin: #content  -->
			<div id="content">
	

				<div id="magazine">
					<div style="background-image:url(images/page-01.jpg);"></div>
					<div style="background-image:url(images/page-02.jpg);"></div>
					<div style="background-image:url(images/page-03.jpg);"></div>
					<div style="background-image:url(images/page-04.jpg);"></div>
					<div style="background-image:url(images/page-05.jpg);"></div>
					<div style="background-image:url(images/page-06.jpg);"></div>
					<div style="background-image:url(images/page-07.jpg);"></div>
					<div style="background-image:url(images/page-08.jpg);"></div>
					<div style="background-image:url(images/page-09.jpg);"></div>
					<div style="background-image:url(images/page-10.jpg);"></div>
					<div style="background-image:url(images/page-11.jpg);"></div>
				</div>




			</div>
<!--  end: #content  -->


		</div>
<!--  end: #wrapper  -->










		<script type="text/javascript">
			$(window).ready(function() {
				$('#magazine').turn({
					display: 'double',
					acceleration: true,
					gradients: !$.isTouch,
					elevation:50,
					when: {
						turned: function(e, page) {
							/*console.log('Current view: ', $(this).turn('view'));*/
						}
					}
				});
			});


			$(window).bind('keydown', function(e){
				if (e.keyCode==37) {
					$('#magazine').turn('previous');
				} else if (e.keyCode==39) {
					$('#magazine').turn('next');
				}
			});
		</script>
	</body>
</html>
