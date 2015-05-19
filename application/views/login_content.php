<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>FPS Demo</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon(s) in the root directory -->
		<link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>
    	<link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
   		<link href='http://fonts.googleapis.com/css?family=Exo:600' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="http://backup-pc.dyndns-server.com/steveform/styles/login_normalize.css">
        <link rel="stylesheet" href="http://backup-pc.dyndns-server.com/steveform/styles/login_main.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <div class="logincontainer">
        	<div class="loginboxlogo"><img src="http://fpsgateway.co.uk/data/she/img/logo-side.png" /> </div>
        	<div class="loginbox">
        		<div class="loginboxtext">
        			<p><strong><h3>Please enter your credentials</h3></strong></p>
        		</div>
        <?php echo form_open('verifylogin'); ?>
        
       			
        				<p>	
        					<input type="text" id="username" placeholder="Login" name="username" />
        		        </p>
        		        <p>
        		        	<input type="password" id="password" placeholder="Password" name="password" />
        		        </p>
        		
        		
        		<p class="textaligncenter"><input type="submit" class="login-button" value="Login"></p>
				
         </form>	
        
        <div class="hotpinklinks">
        <?php echo validation_errors(); ?>
        
       
        <p class="textaligncenter">Click <a href="#">here</a> if you forgot your password.</p>
        </div>
        </div>
        </div>
        
       
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.1.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>
