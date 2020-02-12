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
				<li><a href="/Tap" accesskey="2" title="">Tap</a></li>
				<li><a href="/TroubleShooting" accesskey="3" title="">TroubleShooting</a></li>
				<li><a href="/Tutorials" accesskey="4" title="">Tutorials</a></li>
				<li class="active"><a href="/US_Counter" accesskey="5" title="">US Counter</a></li>
			</ul>
        </div>
        
        
	</div>

<div class="wrapper">
	
		<div id="welcome" class="container">
			
			<div class="title">
				<h2>Welcome to the Upstream Counter!</h2>
			</div>

			
				 
				<form id="app" action="https://vuejs.org/" method="post"novalidate="true">
				

					<p v-if="errors.length">
						<b>Please correct the following error(s):</b>
						<ul>
						<li v-for="error in errors">@{{ error }}</li>
						</ul>
					</p>

					<p><strong>
						Enter the upstream from the tap and calulate the 
						upstream at the Modem.
						</strong>
					</p>

					
					<p style="font-size:30px; align:center">	
					

						<input
						v-model.number="Upstream"
						type="number"
						name="Upstream"
						v-bind:style="styleObject"
						align ='left'
						> Upstream <br/>
						<input
						v-model.number="Splitters"
						type="number"
						name="Splitters"
						v-bind:style="styleObject"
						align ='left'
						> Splitters <br/>
						
						
						
					</p>

					<p style="font-size:30px" >
						Current Total: @{{total}}
					</p>


					</form>
			</div>

			
						<script src="https://cdn.jsdelivr.net/npm/vue@2.6.11"></script>
						<script>
						const app = new Vue({
												el: '#app',

												data:{
													styleObject: 
														{
															color: 'Black',
															fontSize: '20px',
															align: 'center'
															
														},
													errors: [],
													Upstream: 0,
													Splitters:0,
													Filter:0
													
												},
												computed: {
													total: function () {
													// must parse because Vue turns empty value to string
													return Number(this.Upstream) +
														Number(this.Splitters +3.5);
														
													}
												},
												methods:{
													checkForm: function (e) {
													this.errors = [];

													if (this.total != 100) {
														this.errors.push('Total must be 100!');
													}

													if (!this.errors.length) {
														return true;
													}

													e.preventDefault();
													}
												}
										})
						</script>
				
		</div>


</div>

<div id="footer">

	<header style="font-size:50px;"><strong>Headsup!</strong></header>
	<p style="font-size:30px;" align ='left'>A number thing can affect the upstream levels going to a house. 
		So its good to understand that splitters off the mainline can raise the upstream. 
		Depending on how many they are and also the distance of the drop or the inside wire.
	</p>
</div>
<div id="copyright">
	<p>&copy; Random Cable Guy. All rights reserved. | Photos by <a href="http://fotogrph.com/">Fotogrph</a> | Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>.</p>
	<ul class="contact">

	</ul>
</div>
</body>
</html>