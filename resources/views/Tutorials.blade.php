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
			<h1><a href="#">Sidekick</a></h1>
		</div>
		<div id="menu">
			<ul>
				<li ><a href="/welcome" accesskey="1" title="">Homepage</a></li>
				<li><a href="/Tap" accesskey="2" title="">Tap</a></li>
				<li><a href="/TroubleShooting" accesskey="3" title="">TroubleShooting</a></li>
				<li  class="active"><a href="/Tutorials" accesskey="4" title="">Tutorials</a></li>
				<li><a href="/US_Counter" accesskey="5" title="">US Counter</a></li>
			</ul>
		</div>
	</div>
</div>
<div class="wrapper">
	<div id="welcome" class="container">
    	
<div class="title">
	  <h2>Welcome to the Tutorial section!</h2>
		</div>
		<p><strong>Here you can find a guides to install equipment!</strong></p>

	</div>

	<div>
		<link href="css/Tab.css" rel="stylesheet" type="text/css" media="" /> 
		
			<div id="tabs" class="Tabcontainer" align ='center'  >
	
				
				<div class="tabs">
					
					
					<a v-on:click="activetab=1" v-bind:class="[ activetab === 1 ? 'active' : '' ]">DTA</a>
					<a v-on:click="activetab=2" v-bind:class="[ activetab === 2 ? 'active' : '' ]">Whole Home</a>
					<a v-on:click="activetab=3" v-bind:class="[ activetab === 3 ? 'active' : '' ]">Lightwave</a>
					<a v-on:click="activetab=4" v-bind:class="[ activetab === 4 ? 'active' : '' ]">Phone</a>
					<a v-on:click="activetab=5" v-bind:class="[ activetab === 5 ? 'active' : '' ]">ONT</a>
					<a v-on:click="activetab=6" v-bind:class="[ activetab === 6 ? 'active' : '' ]">Modem</a>
				</div>
			
				<!--Listed information helpful on trouble shooting-->
				<div class="content" >
					
					
					<div v-if="activetab === 1" class="tabcontent" > <!----------DTA ------------------------------------------------>
						
						<p align ='left'><strong>DTA Install</strong> 
							<li align ='left'>Check to be sure its plugged in.</li><br>
							<li align ='left'> Make sure their is signal running to the DTA.</li><br>
							<li align ='left'> After all the two steps are compeleted then provison DTAs'</li><br>
						</p><br>
						
					</div>
					<div v-if="activetab === 2" class="tabcontent"><!-----------Whole Home system------------------------------------->
						<p align = 'left'><strong>More coming soon! Will be getting information for Senior techs!</strong>
						</p>					
					</div>

					<div v-if="activetab === 3" class="tabcontent"><!-----------Lightwave Home sytem------------------------------------>
						<p align ='left'><strong>If Installing with Coax</strong>
							<li align ='left'>Check Tap and all lines to make sure signal is good. Make sure their is no ingress.</li><br>
							<li align ='left'>Install Modem and let it take its updates.</li><br>
							<li align ='left'>Install Resgate and let it take its updates.("Depending you might have to reboot the modem 3 times")</li><br>
							<li align ='left'>Install DVR or STBs</li><br>
							<li align ='left'>Wireless STB need to be sync to the gateway. Press Okay button and Press WPS on Gateway.</li><br>
						</p>

						<p align ='left'><strong>If Installing with Fiber</strong>
							<li align ='left'>Check for Light.</li><br>
							<li align ='left'>Install Resgate and let it take its updates.</li><br>
							<li align ='left'>Install DVR or STBs</li><br>
							<li align ='left'>Wireless STB need to be sync to the gateway. Press Okay button and Press WPS on Gateway.</li><br>
						</p>

					</div>

					<div v-if="activetab === 4" class="tabcontent"><!-----------Phone------------------------------------>
						<p align ='left'><strong>Phone</strong>
							<li align ='left'>Check to make sure Line equipment is correct. Check Ped or Office.</li><br>
							<li align ='left'>Provision and check for Dial Tone.</li><br>
						</p>

					</div>

					<div v-if="activetab === 5" class="tabcontent"><!----------- ONT------------------------------------>
						<p align ='left'><strong>ONT</strong>
							<li align ='left'> Open Mobileforce and swap ONT.</li><br>
							<li align ='left'> Then provison in m4.</li><br>
							<li align ='left'>Check to services from ONT.</li><br>
						</p>

						
					</div>

					<div v-if="activetab === 6" class="tabcontent"><!----------- Modem------------------------------------>
						<p align ='left'><strong>Modem</strong>
							<li align ='left'>Check Tap and all lines to make sure signal is good. Make sure their is no ingress.</li><br>
							<li align ='left'>Adjust Modem levels to Upstream is around 45 and Downstream is 0.</li><br>
							<li align ='left'>Install Modem and let it take its updates.</li><br>
						</p>

					</div>
				</div>
			
			</div>

			<script src="https://cdn.jsdelivr.net/npm/vue@2.6.11"></script>

			<!-- Vue Tab section for trouble shooting -->
			<script>
					new Vue
					({
						el: '#tabs',
						data: { activetab: 1 },
					});
			</script>
</div>

<div id="copyright">
	<p>&copy; Random Cable Guy. All rights reserved. | Photos by <a href="http://fotogrph.com/">Fotogrph</a> | Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>.</p>
	<ul class="contact">

	</ul>
</div>
</body>
</html>