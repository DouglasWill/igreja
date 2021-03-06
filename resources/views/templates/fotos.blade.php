@extends('layout.app_galeria')

@section('content')

<div class="page-title">
	<h1>Galerias de Fotos</h1>
</div>
</div> <!-- /header-cover-section -->
	
<!-- Services Wrapper Section -->
	<section class="service-wrapper">
		<!-- container -->
		<div class="container-fluid">
			<div class="section-title"></div>

			<div class="row">
				
				</div>

				<div class="col-md-4 col-sm-4 col-xs-12">
					
				</div>
			</div>
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
							<li><a href="{{ url('/') }}" >Home</a></li> 
							<li><a href="{{ url('/sobre') }}">Igreja</a></li>
							<li><a href="{{ url('/galerias') }}">Fotos</a></li>
        					<li><a href="{{ url('/mensagens') }}">Mensagens</a></li>
							<li><a href="{{ url('/contato') }}">Contato</a></li>
						</ul>
					</div>
				</div>
			</div><!-- /row -->
		</div><!-- /container -->
	</footer><!-- /footer-section -->
</div>
<!-- /inner-wrapper -->

<!-- offcanvas-menu -->
<div class="offcanvas-menu offcanvas-effect">
    <button type="button" class="close" aria-hidden="true" data-toggle="offcanvas"
            id="off-canvas-close-btn">&times;</button>

    <h2>Menu</h2>
    <ul>
        <li><a href="{{ url('/') }}" >Home</a></li> 
		<li><a href="{{ url('/sobre') }}">Igreja</a></li>
		<li><a href="{{ url('/galerias') }}">Fotos</a></li>
        <li><a href="{{ url('/mensagens') }}">Mensagens</a></li>
		<li><a href="{{ url('/contato') }}">Contato</a></li>
    </ul>
</div>
<!-- /offcanvas-menu -->

</div>
<!-- /wrapper -->

@endsection