@extends('layout.app_contato')

@section('content')

<div id="mapCanvas" class="map-canvas"></div>

<div class="page-title">
	<h1>Contato</h1>
		<address>
			<strong>Informações:</strong><br>
			Rua Três Marias<br>
			Caruaru, PE<br>
		    <abbr title="Phone">Telefone:</abbr> (81) 9.9476 - 1916<br>
		</address>
	</div>
</div> <!-- /header-cover-section -->
	
<!-- Services Wrapper Section -->
<section class="contact-wrapper">
	<!-- container -->
	<div class="container-fluid">
		<div class="section-title">
			<h1>Envie-nos a mensagem</h1>
		</div>

		<div class="row">
			<div class="col-md-7">
				
                <form id="contactForm" method="POST"  role="form">
				                
                    <div class="form-group">
				        <label>Nome</label>
				        <input id="nome" name="nome" type="text" class="form-control" required="" required="" placeholder="Nome">
				    </div>
				                
                    <div class="row">
				        <div class="col-md-6">
				            <div class="form-group">
				                <label>Email</label>
				                <input id="email" name="email" type="email" class="form-control" required="" placeholder="Email">
				            </div>
				        </div>
				                    
                        <div class="col-md-6">
				            <div class="form-group">
				                <label>Igreja</label>
				                <input id="igreja" name="igreja" type="text" class="form-control" required="" placeholder="Igreja">
				            </div>
				        </div>
				    </div>
				                
                    <div class="form-group">
				        <label>Assunto</label>
				        <input name="assunto" type="text" class="form-control" required="" id="assunto" placeholder="Assunto">
				    </div>
				                
                    <div class="form-group">
				        <label>Mesagem</label>
				        <textarea id="mensagem" name="mensagem" class="form-control" required="" placeholder="Digite sua mensagem" style="height:100px;"></textarea>
				    </div>
				                
                    <button type="submit" class="btn btn-primary">Enviar</button>
				            
                </form>
			</div>

			<div class="col-md-5">
			    <div class="contact-sub-section">
				    <h2>Contato Pastor</h2>
				        <div class="contact-info">
							<address>
								<strong>Informações:</strong><br>
									Rua Três Marias, 219<br>
									Caruaru, PE<br>
								<abbr title="Phone">Telefone:</abbr> (81) 9.9476 - 1916<br>
							</address>
				        </div>
				    </div>
				    <br>

				    <div class="contact-sub-section">
				        <h2>Endereço da Igreja</h2>
				            <div class="contact-info">
								<address>
									<strong>Informações:</strong><br>
									Rua Três Marias, 223<br>
									Caruaru, PE<br>
									<abbr title="Phone">Celular:</abbr> (81) 9.9678 - 8853<br>
									<abbr title="Phone">Telefone:</abbr> (81) 3722 - 5741<br>
								</address>
				            </div>
				        </div>
				    </div>
					</div>
				</div><!-- /container-fluid --> 
			</section>

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
</div><!-- /inner-wrapper -->

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