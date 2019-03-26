@extends("layouts.default")

@section("title")
:: Home
@endsection

@section("content")
<header class="masthead">
	<div class="container d-flex h-100 align-items-center">
		<div class="mx-auto text-center">
			<h1 class="mx-auto my-0 text-uppercase">London FGC</h1>
		</div>
	</div>
</header>
<section id="about" class="about-section text-center">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 mx-auto">
				<h2 class="text-white mb-4">What is London FGC?</h2>
				<p class="text-white-50 mb-4">
					Established in 2015, London FGC, or FC<sup>2</sup> (Forest City Fight Club) is the largest Fighting Game scene in London, Ontario, Canada.
				</p>
				<p class="text-white-50">
					We are a diverse group of individuals who enjoy learning, challenging each other and mastering the latest and greatest fighting games.
					Whether you're a casual or hardcore player, London FGC has a spot for you. Come join us!
				</p>
			</div>
		</div>
	</div>
</section>
<section id="weeklies" class="weeklies-section">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12 col-sm-12 col-md-6 offset-md-0 col-lg-4 offset-lg-1 col-xl-4 offset-xl-1 mb-5 mb-sm-5 mb-md-0 md-lg-0 mb-xs-0">
				<div class="featured-text text-center text-lg-left">
					<h4>Weekly Casuals at Fox &amp; Fiddle</h4>
					<p class="text-black-50">
						London FGC hosts weekly casuals at Fox &amp; Fiddle bar and restaurant in downtown London every Wesnesday from 6PM until close.
					</p>
					<p class="text-black-50 mb-0">
						On Wednesdays, Fox &amp; Fiddle offers $9.99 burgers (with the purchase of a drink) and $0.00 tall boys of Miller Genuine Draft. Come on out and enjoy some food, drinks, and games with the London FCG.
					</p>
					<hr class="my-4"/>
					<div class="row">
						<div class="col-12">
							<i class="fas fa-map-marker-alt fa-2x text-primary mt-2 mb-2 mr-3" style="float: left;"></i>
							<p class="text-black-100">
								355 Wellington St.<br/>
								<span class="text-black-50">London ON, N6A 3N7</span>
							</p>
							<i class="fas fa-calendar-week fa-2x pull-left text-primary mt-2 mb-2 mr-3" style="float: left;"></i>
							<p class="text-black-100 mb-0">
								Wednesday<br/>
								<span class="text-black-50">6PM - Close</span>
							</p>
						</div>
					</div>						
				</div>
			</div>
			<div class="col-12 col-sm-12 col-md-6 offset-md-0 col-lg-4 offset-lg-2 col-xl-4 offset-xl-2">
				<div class="featured-text text-center text-lg-left">
					<h4>Weekly Smash at Western</h4>
					<p class="text-black-50">In partnership with The University of Western Ontario, London FGC invites it's members to weekly casuals for Super Smash Brothers Ultimate every Friday in the Arts and Humanities building on Western Campus.</p>
					<p class="text-black-50 mb-0">Both beginner and advanced tournaments are available, with players from the advanced tournament being eligible for the beginner tournament based on performance. A $10.00 entry fee is required, with your first tournament showing being on the house.</p>
					<hr class="my-4"/>
					<div class="row">
						<div class="col-12">
							<i class="fas fa-map-marker-alt fa-2x text-primary mt-2 mb-2 mr-3" style="float: left;"></i>
							<p class="text-black-100">
								1151 Richmond St.<br/>
								<span class="text-black-50">London ON, N6A 3K7</span>
							</p>
							<i class="fas fa-calendar-week fa-2x pull-left text-primary mt-2 mb-2 mr-3" style="float: left;"></i>
							<p class="text-black-100 mb-0">
								Friday<br/>
								<span class="text-black-50">5PM - 9PM</span><br/>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="applications" class="applications-section text-center">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-12 col-xs-6 col-md-6 mb-5 mb-sm-5 mb-md-0 md-lg-0 mb-xs-0">
				<h2 class="text-white mb-4">RanBats</h2>
				<p class="text-white-50 mb-4">
					RanBats is London FGC's application for managing the various Ranked Battles occuring during the weeklies at Fox and Fiddle.
				</p>
				<p class="text-white-50 mb-4">
					Featuring a variety of games, statistic analysis and a fully fleshed-out management system, RanBats has helped organize London FCG's competitive scene.
				</p>
				<a href="{{ url("/ranbats") }}" class="btn btn-primary">RanBats</a>
			</div>
			<div class="col-12 col-xs-6 col-md-6">
				<h2 class="text-white mb-4">Carpooler</h2>
				<p class="text-white-50 mb-4">
					Carpooler is an application for managing rides to and from various tournament locations. Set availability or request rides from other members, manage routes and passengers, and help keep yourself organized.
				</p>
				<p class="text-white-50 mb-4">
					Currently, Carpooler is in development. Please check back at a later time to see if Carpooler is ready for action.
				</p>
				<button type="button" class="btn btn-primary" disabled>Carpooler</button>
			</div>
		</div>
	</div>
</section>
<section id="contact" class="contact-section bg-black">
	<div class="container">
		<div class="row">
			<div class="col-md-3 mb-3 mb-md-0">
				<div class="card py-4 h-100">
					<div class="card-body text-center">
						<i class="fab fa-facebook text-primary mb-2"></i>
						<h4 class="text-uppercase m-0">Facebook</h4>
						<hr class="my-4">
						<div class="small text-black-50">
							<a href="https://www.facebook.com/groups/282964981761614" target="_blank">Facebook Group</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3 mb-3 mb-md-0">
				<div class="card py-4 h-100">
					<div class="card-body text-center">
						<i class="fab fa-discord text-primary mb-2"></i>
						<h4 class="text-uppercase m-0">Discord</h4>
						<hr class="my-4"/>
						<div class="small text-black-50">
							<a href="https://discordapp.com/invite/HzvFcpM" target="_blank">Discord Invite</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3 mb-3 mb-md-0">
				<div class="card py-4 h-100">
					<div class="card-body text-center">
						<i class="fab fa-youtube text-primary mb-2"></i>
						<h4 class="text-uppercase m-0">Youtube</h4>
						<hr class="my-4">
						<div class="small text-black-50">
							<a href="https://www.youtube.com/channel/UCTnEgfIESSeLbXJbGdMc-cQ" target="_blank">Youtube Channel</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3 mb-3 mb-md-0">
				<div class="card py-4 h-100">
					<div class="card-body text-center">
						<i class="fab fa-twitter text-primary mb-2"></i>
						<h4 class="text-uppercase m-0">Twitter</h4>
						<hr class="my-4">
						<div class="small text-black-50">
							<a href="https://twitter.com/LondonOntFGC" target="_blank">Follow on Twitter</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<footer class="bg-black small text-center text-white-50">
	<div class="container">
		London FGC - Established 2015 - London, Ontario
	</div>
</footer>
@endsection
