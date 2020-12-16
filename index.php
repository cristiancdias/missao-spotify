<?php
  include __DIR__ . "/layouts/cabecalho.php";
?>

<div class="container-fluid fundo">
	<div class="container py-5 cabecalho"> <!--Cabeçalho-->
		<div class="row">
			<div class="col-md-8">
				<h1><strong>Curta 3 meses de</br> Premium grátis</strong></h1>
				<h3>Curta músicas sem anúncios, no modo</br> offline e muito mais. Cancele quando quiser.</h3>
				<a href="#" class="btn btn-primary">GANHE 3 MESES GRÁTIS</a>
				<p>
					Somente para o plano Individual. Depois, apenas R$ 16,90/mês. 
					Oferta indisponível para usuários que já </br>experimentaram o Premium. 
					<a href="#" alt="link">Sujeita a Termos e Condições</a>. 
					A oferta termina em 31 de dez de 2020.
				</p>
			</div>
			<div class="col-md-4">
				<img src="./imagens/balão.png" alt="balão">
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-3 py-3 navegacao-lateral"> <!--Navegação Lateral-->
				<?php
					include __DIR__ . "/layouts/navegacao-lateral.php";
				?>
			</div>
			<div class="col-md-9 visao-geral py-5 px-5 utilitario"> <!--Visão Geral-->
				<h1>Visão geral da conta</h1>
				<h3>Perfil</h3>
				<div class="row linha">
					<div class="col-md-6 informacoes">
						<p>Nome do usúario</p>
						<p>E-mail</p>
						<p>Data de nascimento</p>
						<p>País ou região</p>
					</div>
					<div class="col-md-6">
						<p>cristiancdias</p>
						<p>cristiancdias@gmail.com</p>
						<p>5 de janeiro de 1983</p>
						<p>Brasil</p>
					</div>
				</div>
				<a href="#" class="btn btn-primary">
						<strong>EDITAR PERFIL</strong>
				</a>
				<h3>Seu plano</h3>
				<h1 class="banner-roxo">
					<strong>Spotify Free</strong>
				</h1>
						
				<div class="bloco-free">
					<p>Ouça música apenas em ordem aleatória e com anúncios.</p>
					<h3>Free</h3>
				</div>

				<a href="#" class="btn btn-primary">
					<strong>SEJA PREMIUM</strong>
				</a>

				<h3>Saia em qualquer lugar</h3>
				<p>
					Saia em tudo que o Spotify estiver aberto, inclusive na Web, 
					no celular, no desktop ou em qualquer outro dispositivo.
				</p>

				<p class="aviso">
					Aviso: não será feito logout de dispositivos parceiros, 
					como aparelhos da Sonos ou PlayStation. Para saber mais sobre 
					como sair do Spotify (ou desvinculá-lo) em um dispositivo p
					arceiro, confira o manual do fabricante do dispositivo.
				</p>
				<a href="#" class="btn btn-primary grande">
					<strong>SAIR DE TODOS OS DISPOSITIVOS</strong>
				</a>
			</div>
		</div>
	</div>
</div>

<?php
  include __DIR__ . "/layouts/rodape.php";
?>