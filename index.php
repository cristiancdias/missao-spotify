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
				<img class="img-fluid" src="./imagens/balao.png" alt="balao">
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
				<div>
					<h3>Perfil</h3>
					<div class="pb-3">
						<table class="table">
							<tbody>
								<tr>
									<th class="py-3">Nome do usuário</th>
									<td class="py-3">cristiancdias</td>
								</tr>
								<tr>
									<th class="py-3">E-mail</th>
									<td class="py-3">cristiandias@gmail.com</td>
								</tr>
								<tr>
									<th class="py-3">Data de nascimento</th>
									<td class="py-3">5 de janeiro de 1983</td>
								</tr>
								<tr>
									<th class="py-3">País ou região</th>
									<td class="py-3">Brasil</td>
								</tr>
							</tbody>
						</table>
					</div>
					<a href="#" class="btn btn-primary">
						<strong>EDITAR PERFIL</strong>
					</a>
				</div>
				<div>
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
				</div>
				<div>
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
</div>

<?php
  include __DIR__ . "/layouts/rodape.php";
?>