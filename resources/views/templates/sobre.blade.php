@extends('layout.app_sobre')

@section('content')

<div class="page-title">
	<h1>Who we are ?</h1>
		<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip.</p>
	</div>
</div> <!-- /header-cover-section -->
	
<!-- mission wrapper section -->
<section class="mission-wrapper">
	<!-- container -->
	<div class="container-fluid">
		<div class="col-md-6">
			<div class="section-title">
				<h1>Our Mission</h1>
			</div>

<div class="css-our-mission">
	<p>Lorem ipsum dolor sit amet, consectetuer adipiscing consequa nonummy nibh euismod tincidunt ut laoreet dolore magna ea aliquam erat volutpat. Ut wisi enim ad minim veniam.</p>
	<p><strong>Intrinsicly provide access to cross-unit niche markets through cross</strong></p>
		<ul>
			<li>Conveniently exploit dynamic ROI whereas inexpensive quality</li>
			<li>Vectors authoritatively evisculate dynamic initiatives rather volutpat</li>
			<li>Than long-term high-impact niches energistically innovate aliquam</li>
			<li>Optimal vortals whereas performance based processes laoreet dolore</li>
		</ul>
	</div>
</div>
					
<div class="col-md-6">
	<div class="section-title">
		<h1>Our Skills</h1>
	</div>

<div class="custom css-our-skills">
	<div class="skill-bar-wrap">
		<span>Progressively actualize</span>
			<div class="progress">
				<div class="progress-bar" style="width: 85%;">85%</div>
			</div>
		</div>

		<div class="skill-bar-wrap">
			<span>Seamlessly engage</span>
				<div class="progress">
					<div class="progress-bar" style="width: 70%;">70%</div>
				</div>
			</div>

			<div class="skill-bar-wrap">
				<span>Phosfluorescently revolutionize</span>
					<div class="progress">
						<div class="progress-bar" style="width: 90%;">90%</div>
					</div>
				</div>

				<div class="skill-bar-wrap">
					<span>Quickly transform</span>
						<div class="progress">
						<div class="progress-bar" style="width: 65%;">65%</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="about-us-carousel">
	<div id="about-us-carousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#about-us-carousel" data-slide-to="0" class="active"></li>
			<li data-target="#about-us-carousel" data-slide-to="1"></li>
		</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<img src="{{ asset('../../../../style/img/abt-slide1.jpg') }}" alt="img">
				    <div class="carousel-caption">
				        Interbizz has a lot of features you might need to implement in your business site
				    </div>
				</div>
				    
			<div class="item">
				<img src="{{ asset('../../../../style/img/abt-slide2.jpg') }}" alt="img">
				    <div class="carousel-caption">
				        We made it possible for user to have the best ever user friendly experience with Interbizz Multipurpose html Template.
				    </div>
				</div>
			</div>

			<!-- Controls -->
			<a class="left carousel-control" href="#about-us-carousel" role="button" data-slide="prev">
				<span class="fa fa-angle-left"></span>
				    <span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#about-us-carousel" role="button" data-slide="next">
				<span class="fa fa-angle-right"></span>
				    <span class="sr-only">Next</span>
			</a>
		</div>
	</section>

	<!-- Team Wrapper Section -->
	<section class="team-wrapper">
		<!-- container -->
		<div class="container-fluid">
			<div class="section-title">
				<h1>Our Team Members</h1>
			</div>

	<!-- row -->
	<div class="row">
		<div class="col-md-6 col-sm-6 col-xs-12">
			<figure class="media">
				<div class="team-avatar pull-left">
					<div class="avatar-front">
						<img class="media-object img-responsive" src="{{ asset('../../../../style/img/team/TM-1.jpg') }}" alt="Image">
					</div>
					
					<div class="avatar-back css-overlay-links">
						<a class="readmore" href="#"><i class="fa fa-link"></i></a>
					</div>
				</div>
								
				<div class="media-body">
					<h2 class="media-heading">Jhon Doe<br><small>Chief Excutive</small></h2>
						<div class="team-introtext">
							<p>Cras laoreet, sem vitae faucibus fermentum, metus tortor pharetra enim, ut laoreet eros lectus sed nunc. Nunc sagittis vulputate mi.&nbsp;</p>
						</div>
					</div>
			</figure>
		</div>

		<div class="col-md-6 col-sm-6 col-xs-12">
			<figure class="media">
				<div class="team-avatar pull-left">
					<div class="avatar-front">
						<img class="media-object img-responsive" src="{{ asset('../../../../style/img/team/TM-3.jpg') }}" alt="Image">
					</div>

					<div class="avatar-back css-overlay-links">
						<a class="readmore" href="#"><i class="fa fa-link"></i></a>
					</div>
				</div>

				<div class="media-body">
					<h2 class="media-heading">Linda Milar<br><small>Customer Manager</small></h2>

						<div class="team-introtext">
							<p>Cras laoreet, sem vitae faucibus fermentum, metus tortor pharetra enim, ut laoreet eros lectus sed nunc. Nunc sagittis vulputate mi.</p>

						</div>
					</div>
			</figure>
		</div> <!-- /col-md-6 -->
	</div><!-- /row --> 

					<!-- row -->
					<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-12">
							<figure class="media">
								<div class="team-avatar pull-left">

									<div class="avatar-front">
										<img class="media-object img-responsive" src="{{ asset('../../../../style/img/team/TM-4.jpg') }}" alt="Image">
									</div>

									<div class="avatar-back css-overlay-links">
										<a class="readmore" href="#"><i class="fa fa-link"></i></a>
									</div>
								</div>

								<div class="media-body">
									<h2 class="media-heading">Danniel Devid<br><small>Senior Developer</small></h2>

									<div class="team-introtext">
										<p>Cras laoreet, sem vitae faucibus fermentum, metus tortor pharetra enim, ut laoreet eros lectus sed nunc. Nunc sagittis vulputate mi.</p>
									</div>
								</div>
							</figure>
						</div> <!-- /col-md-6 -->

						<div class="col-md-6 col-sm-6 col-xs-12">
							<figure class="media">
								<div class="team-avatar pull-left">

									<div class="avatar-front">
										<img class="media-object img-responsive" src="{{ asset('../../../../style/img/team/TM-2.jpg') }}" alt="Image">
									</div>

									<div class="avatar-back css-overlay-links">
										<a class="readmore" href="#"><i class="fa fa-link"></i></a>
									</div>

								</div>

								<div class="media-body">
									<h2 class="media-heading">Nancy Ellen<br><small>Senior Designer</small></h2>

									<div class="team-introtext">
										<p>Cras laoreet, sem vitae faucibus fermentum, metus tortor pharetra enim, ut laoreet eros lectus sed nunc. Nunc sagittis vulputate mi.</p>
									</div>
								</div>
							</figure>
						</div> <!-- /col-md-6 -->
					</div><!-- /row --> 
				</div><!-- /container-fluid --> 
			</section>

<!-- subscription-section -->
<section class="subscription-section section-content" data-stellar-vertical-offset="-150" data-stellar-background-ratio="0.5">
	<!-- container -->
	<div class="container-fluid">
		<!-- row -->
		<div class="row">
			<div class="col-md-8 col-sm-10">
				<div class="subscription-text">
					Consequentemente, a fé vem por se ouvir a mensagem,
					 <p>e a mensagem é ouvida mediante a palavra de Cristo.</p>
					 <p>Romanos 10:17</p>
				</div>
			</div>
		</div><!-- /row -->
	</div><!-- /container -->
</section><!-- /subscription-section -->

<!-- footer-section -->
<footer class="footer-section">
	<!-- container -->
	<div class="container-fluid">
		<!-- row -->
		<div class="row">
			<div class="col-md-6">
				<div class="copyright-text">
					Copyright &copy; 2017. All Rights Reserved. Made by Freelancer							
                </div><!--  /copyright-text -->
            </div>

				<div class="col-md-6">	
					<div class="footer-menu">
						<ul>
							<li><a href="#">Home</a></li>
                            <li><a href="#">Igreja</a></li>
                            <li><a href="#">Fotos</a></li>
							<li><a href="#">Mensagens</a></li>
                            <li><a href="#">Contato</a></li>
						</ul>
					</div>
				</div>
			</div><!-- /row -->
		</div><!-- /container -->
	</footer><!-- /footer-section -->
</div><!-- /inner-wrapper -->

<!-- offcanvas-menu -->
<div class="offcanvas-menu offcanvas-effect">
    <button type="button" class="close" aria-hidden="true" data-toggle="offcanvas"
            id="off-canvas-close-btn">&times;</button>

    <h2>Menu</h2>
    <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Igreja</a></li>
        <li><a href="#">Fotos</a></li>
		<li><a href="#">Mensagens</a></li>
        <li><a href="#">Contato</a></li>
    </ul>
</div>
<!-- /offcanvas-menu -->

</div>
<!-- /wrapper -->

@endsection