<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by TEMPLATED
http://templated.co
Released for free under the Creative Commons Attribution License

Name       : Undeviating 
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20140322

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900|Quicksand:400,700|Questrial" rel="stylesheet" />
<link href="css/default.css" rel="stylesheet" type="text/css" media="all" />
<link href="/fonts.css" rel="stylesheet" type="text/css" media="all" />

<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->

</head>
<body>
<div id="header-wrapper">
	<div id="header" class="container">
		<div id="logo">
        	<span class="icon icon-cog"></span>
			<h1><a href="/welcome">Sidekick</a></h1>
		</div>
		<div id="menu">
			<ul>
				<li ><a href="/welcome" accesskey="1" title="">Homepage</a></li>
				<li class="active"><a href="/Tap" accesskey="2" title="">Tap</a></li>
				<li><a href="/TroubleShooting" accesskey="3" title="">TroubleShooting</a></li>
				<li><a href="/Tutorials" accesskey="4" title="">Tutorials</a></li>
				<li><a href="/US_Counter" accesskey="5" title="">US Counter</a></li>
			</ul>
		</div>
	</div>
</div>
<div class="wrapper">
	<div id="banner" class="container"></div>
	<div id="welcome" class="container">
    	
<div class="title">
	  <h2 >Welcome to the Tap section!</h2>
		</div>
        <p align="center" ><strong>Here we learn all about, what should the upstream specs be on the Tap.
			Tilt may vary, due to certain spans that may split off.</strong></p>
			<img src="images/Tap.jpg" width="400" height="300" alt="center" />
			<style>
				select {
					height: 100px;
					width: 400px;
					margin: 10px;
					font-size: 30px;
					background-color:white;
					
	
				}
				select:focus {
					min-width: 400px;
					width: auto;
				}    
			</style>

			<!--Vue code here for Tap value-------------------------->
			<div id="app" align="center">
				<h2><select v-model="selected" >
					<option v-for="option in options" v-bind:value="option.value">
					 @{{ option.text }}
					</option>
				  </select>
				  
				  <span style="color:rgb(0,0,)">@{{ selected }}</span></h2>
			</div>
	
			
			<script src="https://cdn.jsdelivr.net/npm/vue@2.6.11"></script>
			<script>
				new Vue({
					el: '#app',
					data: {
					selected: 'Upstream 41-43',
					options: [
						{ text: 'Tap 24', value: 'Upstream 41-43' },
						{ text: 'Tap 23', value: 'Upstream 41-43' },
						{ text: 'Tap 21 8pt', value: 'Upstream 40-41' },
						{ text: 'Tap 20', value: 'Upstream 40-41' },
						{ text: 'Tap 18 8pt', value: 'Upstream 38-40' },
						{ text: 'Tap 17', value: 'Upstream 38-40' },
						{ text: 'Tap 15', value: 'Upstream 36-38' },
						{ text: 'Tap 14', value: 'Upstream 36-38' },
						{ text: 'Tap 11', value: 'Upstream 32-36' },
						{ text: 'Tap 8' , value: 'Upstream 28-32' },
						{ text: 'Tap 8x', value: 'Upstream 28-32 is a Terminating Tap' },
						{ text: 'Tap 4' , value: 'Upstream 26-28' },
						{ text:'Tap 12x 8pt ', value: 'Upstream 32-36 is a Terminating Tap' }
						
					]
					}
				})
			  </script>    
			  <!--Vue code here for Tap value ends-->
	</div>


</div>

<body style="text-color:white">
	
		



			


</body>

<div id="copyright">
	<p>&copy; Random Cable Guy. All rights reserved. | Photos by <a href="http://fotogrph.com/">Fotogrph</a> | Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>.</p>
	<ul class="contact">

	</ul>
</div>
</body>
</html>