@extends('layout.app')

@section('content')

<!-- slider section -->
<section class="slider-section">
	<div class="container-fluid">
		<div class="row">				
			<div class="col-md-12">				
				<div class="slider">
					<div class="slideshow-text">
						<h1>IGREJA EVANGÉLICA SEMEAR</h1>
						
					</div>
					<a href="#cultos" id="go-next" class="go-next"><i class="fa fa-angle-down"></i></a>
				</div> <!-- /slider -->
			</div><!-- /col-md-12 -->
		</div><!-- /row -->
	</div><!-- container-fluid -->
</section><!-- /slider section -->	
</div> <!-- /header-cover-section -->

<!-- miscellaneous-section -->
<section id="cultos" class="miscellaneous-section section-content" data-stellar-vertical-offset="-150" data-stellar-background-ratio="0.5">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6">
				<div class="intro-text white-bg">
					<h2>Cultos</h2>
					<p>Não perca os cultos durante semana e finais de semana. Venha com sua família adorar o nome do Senhor mesmo diante das bonanças e adversidades da vida não podemos deixar de agradecer ao Senhor por tudo.</p>
				</div>
			</div>

<div class="col-md-6">
<!-- tab-wrap -->
	<div class="tab-wrap white-bg">
		<!-- Nav tabs -->
		<ul class="nav nav-tabs" role="tablist">
			<li class="active"><a href="#tuesday" role="tab" data-toggle="tab">Terça-feira</a></li>
			<li><a href="#thursday" role="tab" data-toggle="tab">Quinta-feira</a></li>
			<li><a href="#friday" role="tab" data-toggle="tab">Sexta-feira</a></li>
			<li><a href="#sunday" role="tab" data-toggle="tab">Domingo</a></li>
		</ul>
<!-- Tab panes -->
<div class="tab-content">
	<div class="tab-pane fade in active" id="tuesday">
		15:00 &nbsp; &nbsp; Culto das Mulheres
	<p> 19:30 &nbsp; &nbsp; Culto dos Jovens</p>
	</div>

	<div class="tab-pane fade" id="thursday">
		19:30 &nbsp; &nbsp; Culto de Estudo
	</div>

	<div class="tab-pane fade" id="friday">
		19:30 &nbsp; &nbsp; Culto de Oração
	</div>

	<div class="tab-pane fade" id="sunday">
		17:30 &nbsp; &nbsp; Culto da Família
	</div>
</div>
</div><!-- /tab-wrap -->
</div>
</div><!-- /row -->
</div><!-- /container -->
</section><!-- /miscellaneous-section -->

<!-- testimonial-section -->
<section class="testimonial-section section-content">
	<!-- container -->
	<div class="container-fluid">
		<!-- row -->
		<div class="row">
			<div class="section-title">
				<h1>Noticias</h1>
			</div>
<div class="col-md-12">
	<div class="testimonial-caruosel white-bg">
		<div class="testimonial-items">
			<div class="item client-testimonial">
				<img src="{{ asset('../../../../style/img/ceia.jpg') }}" alt="" />
				<p>Santa Ceia do Senhor</p>
				<p>1° dia de cada mês no templo</p>
			</div> <!-- client-testimonial -->

			<div class="item client-testimonial">
				<img src="{{ asset('../../../../style/img/louvorzao.jpg') }}" alt="" />
				<p>Louvorzão</p>
				<p>Último sabado de cada mês</p>
			</div> <!-- client-testimonial -->
		</div>	<!-- testimonial-items -->
									
		<div class="customNavigation testimonial-items-navigation">
			<a class="next brand-bg"><i class="fa fa-angle-right animated-icon-ltr"></i></a>
			<a class="prev brand-bg"><i class="fa fa-angle-left animated-icon-rtl"></i></a>
		</div>
	</div> <!-- testimonial-caruosel -->
</div> <!-- //col-md-8 -->
</div><!-- /row -->
</div><!-- /container -->
</section><!-- /testimonial-section -->

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
	</div> <!-- /footer-menu -->
</div>
</div><!-- /row -->
</div><!-- /container -->
</footer><!-- /footer-section -->
</div><!-- /inner-wrapper -->

@endsection