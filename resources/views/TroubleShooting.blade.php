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
				<li><a href="/welcome" accesskey="1" title="">Homepage</a></li>
				<li><a href="/Tap" accesskey="2" title="">Tap</a></li>
				<li><a href="/Modem" accesskey="3" title="">Modem</a></li>
				<li class="active"><a href="/TroubleShooting" accesskey="4" title="">TroubleShooting</a></li>
				<li><a href="/Tutorials" accesskey="5" title="">Tutorials</a></li>
				<li><a href="/US_Counter" accesskey="6" title="">US Counter</a></li>
			</ul>
		</div>
	</div>
</div>
<div class="wrapper">
	<div id="banner" class="container">></div>
	<div id="welcome" class="container">
    	
<div class="title">
	  <h2>Welcome to the TroubleShooting section!</h2>
		</div>
		<p><strong>In this section we will cover what to do when encountering a problem.</strong></p>
        
	</div>

	<body>
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
								
								<p align ='left'><strong>DTA not powering on?</strong> 
									<li align ='left'>Check to be sure its plugged in.</li><br>
									<li align ='left'> Try swapping the power adapter.</li><br>
									<li align ='left'> Try another box in the same spot.</li><br>
								</p><br>
								
								<p align ='left'><strong>DTA is not displaying?</strong>
									<li align ='left'> Check the that the HDMI is plugged in.</li><br>
									<li align ='left'> Try another box in the same spot.</li><br>
									<li align ='left'> Try swapping out the port or try a coax.</li><br>
									<li align ='left'> Try same box on another TV.</li><br>
									<li align ='left'> Check to make sure their is a signal above -10db/-10db.</li><br>
								</p>

								<p align ='left'><strong>DTA is tiling and freezing?</strong> Check to make sure their is no ingress('noise') on the line.</p><br>

								<p align = 'left'><strong> DTA is has no volume? </strong>
									<li align ='left'>Check to be sure that volume on DTA is up.</li><br>
									<li align ='left'>Check to be sure that volume on TV is up.</li><br>
									<li align ='left'>Check to be sure that customer surround sound is on? If not disconnect it.</li><br>
									<li align ='left'>DTA is has no volume?</strong> Try another box in same spot.</li><br>
								</p>
								
								<p align ='left'><strong>DTA has no guide?</strong> Channel 2 is the only guide.</p><br>

								<p align ='left'><strong>DTA some channeles are not fullscreen?</strong>
									<li align ='left'> Some boardcasters on boardcast in standard defention.</li><br>
									<li align ='left'>If HMDI is plug set to 1080pi. Coax does not support this.</li><br>
								</p>

								<p align ='left'><strong>DTA Channel not in subscription?</strong>
									<li align ='left'>Be sure the signal is good behind the DTA. This can cause some channels to be missing</li><br>
									<li align ='left'>Signal is good. Their might be provisioning issue. Call Field Support.</li><br>
								</p>
							</div>
							<div v-if="activetab === 2" class="tabcontent"><!-----------Whole Home system------------------------------------->
								<p align = 'left'><strong>STB not powering on?</strong>
									<li align ='left'>Check to be sure its plugged in.</li><br>
									<li align ='left'>Try swapping the power adapter.</li><br>
									<li align ='left'>Try another box in the same spot.</li><br>
								</p>
								
								<p align = 'left'><strong>STB is not displaying?</strong>
									<li align ='left'>Check the that the HDMI is plugged in.</li><br>
									<li align ='left'>Try another box in the same spot.</li><br>
									<li align ='left'>Try swapping out the port or try a coax.</li><br>
									<li align ='left'>Try same box on another TV.</li><br>
									<li align ='left'>Check to make sure their is a signal above -10db/-10db.</li><br>
								</p>
								<p align ='left'><strong>STB is tiling and freezing?</strong> Check to make sure their is no ingress('noise') on the line.</p><br>

								<p align = 'left'><strong>STB is has no volume?</strong>
									<li align ='left'>Check to be sure that volume on STB is up.</li><br>
									<li align ='left'>Check to be sure that volume on TV is up.</li><br>
									<li align ='left'>Check to be sure that customer surround sound is on? If not disconnect it.</li><br>
									<li align ='left'>Try another box in same spot.</li><br>
								</p>

								<p align ='left'><strong>STB has no guide?</strong>
									<li align ='left'>Get hit sent to STB. Update and refresh</li><br>
									<li align ='left'>Try rebooting STB.</li><br>
								</p>

								<p align ='left'><strong>STB some channels are not fullscreen?</strong>
									<li align ='left'>Some broadcasters only broadcast in standard defention. Go to channel 800 and up.</li><br>
									<li align ='left'>If HMDI is plug set to 1080pi. Coax does not support this.</li><br> 
								</p>

								<p align ='left'><strong>STB Channel not in subscription?</strong>
									<li align ='left'>Be sure the signal is good behind the STB. This can cause some channels to be missing</li><br>
									<li align ='left'>If Signal is good. Their might be provisioning issue. Call Field Support.</li><br>
								</p>

								<p align ='left'><strong>FEATURE Video On Demand not working?</strong>
									<li align ='left'>Run a docis with your meter. If fails their is a filter on the line.</li><br>
									<li align ='left'>May need get refresh hit sent to the box.</li><br>
									<li align ='left'>May need swap out the box.</li><br>
								</P>

								<p align ='left'><strong>FEATURE DVR not working?</strong>
									<li align ='left'>Check the diagnostic. On Remote press Power and Okay at sametime. Review status of DVR if poor swap out.</li><br>
									<li align ='left'>May need to swap out STB.If hit does not work.</li><br>
									<li align ='left'>Check to makesure that line is connected to J-Hawk.</li><br>
								</p>
								
								<p align ='left'><strong>FEATURE Cannot access recordings?</strong>
									<li align ='left'>Check to makesure that line is connected to J-Hawk.</li><br>
									<li align ='left'>Press B on the remote to see if comes up.</li><br>
								</p>
								
							</div>

							<div v-if="activetab === 3" class="tabcontent"><!-----------Lightwave Home sytem------------------------------------>
								<p align ='left'><strong>Stuck on Lightwave screen.</strong>
									<li align ='left'>Check modem and make sure its provisioned for Lightwave. Check by call Field Support.</li><br>
									<li align ='left'>Check that Res-Gate is plug into modem.</li><br>
								</p>

								<p align ='left'><strong>Signal has been lost.</strong>
									<li align ='left'>Check that Res-Gate is plugged into modem.</li><br>
									<li align ='left'> Check that modem is working.</li><br>
									<li align ='left'>Called to make sure its not a multicast issue.</li><br>
								</p>

								<p align ='left'><strong>Red Service Light </strong>
									<li align ='left'>Check that Res-Gate is plug into modem.</li><br>
									<li align ='left'>Check that modem is passing data.</li><br>
								</p>

								<p align ='left'><strong>Channel listing does not shows up </strong>
									<li align ='left'>Check that Res-Gate is plug into modem.</li><br>
								</p>

								<p align ='left'><strong>Red X </strong>
									<li align ='left'>Try resyncing box with WPS button on Res-Gate. </li><br>
									<li align ='left'>ry resyncing box with the virutal WPS button on Res-Gate. By loggin in as the admin. </li><br>
								</p>

								<p align ='left'><strong>Tiling and Freezing </strong>
									<li align ='left'>Check for noise on the lines. </li><br>
								<p>

								<p  align ='left'><strong>No Wifi</strong> 
									<li align ='left'> into Res-Gate to make sure wifi is enabled.</li><br>
									<li align ='left'>Make sure SSID is correct.</li><br>
								</p>

							</div>

							<div v-if="activetab === 4" class="tabcontent"><!-----------Phone------------------------------------>
								<p align ='left'><strong>No Dial Tone</strong>
									<li align ='left'> Disconnect all lines(Except drop) in protector to check issue.</li><br>
									<li align ='left'> Check Pedstal drop if still no tone.Then head to Office</li><br>
									<li align ='left'>Disconnect caborn to check office side. If still no tone check phone card.</li><br>
									<li align ='left'>Check line equipment. Besure its correct.</li><br>
									<li align ='left'>Check splices in other locations. Make sure their is only one protector.</li><br>
								</p>

								<p align ='left'><strong>Dial Tone doesn't break </strong> 
									<li align ='left'> Number is supsended.</li><br>
									<li align ='left'>Double check Ped and Line equipment.</li><br>
								</p>

								<p align ='left'><strong>Get Phone number ID </strong>
									<li align ='left'> On the test set dial 7 9 8 9 9 9 9.</li><br>
								</P>

								<li align ='left'><strong>More coming soon!</strong></li><br>


							</div>

							<div v-if="activetab === 5" class="tabcontent"><!----------- ONT------------------------------------>
								<p align ='left'><strong>No Dial Tone</strong>
									<li align ='left'> Test phone jack.</li><br>
									<li align ='left'> Switch out phone jack.</li><br>
								</p>
								
								<p align='left' ><strong>No Data</strong>
									<li align ='left'> Test with Laptop. If no Data, Call Field Support.</li><br>
								</p>
								
							</div>

							<div v-if="activetab === 6" class="tabcontent"><!----------- Modem------------------------------------>
								<p align ='left'><strong>No Data</strong>
									<li align ='left'>Be sure their is a signal. Make sure signal Upstream is at 43-48. Downstream close to 0.</li><br>
									<li align ='left'>Be sure modem is provisioned, Call Field Support to check.</li><br>
									<li align ='left'>Log into to modem to see if their is an IP address assigned.</li><br>
								</p>

								<p align ='left'><strong>No Wifi</strong>
									<li align ='left'>Log into modem to make sure wifi is enabled.</li><br>
									<li align ='left'>Make sure SSID is correct.</li><br>
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
				
			</div >
			
	  </body >
	  

</div>

<div id="copyright">
	<p>&copy; Random Cable Guy. All rights reserved. | Photos by <a href="http://fotogrph.com/">Fotogrph</a> | Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>.</p>
	<ul class="contact">

	</ul>
</div>
</body>
</html>