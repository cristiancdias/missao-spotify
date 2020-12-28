<?php
  include __DIR__ . "/../layouts/cabecalho.php";
?>

<div class="container-fluid fundo">
	<div class="container py-5 heading">
    <div class="row">
      <div class="col-md-6">
        <h4>SPOTIFY PREMIUM</h4>
        <h1 class="pt-3">Tá acabando: 3 meses de Premium grátis</h1>
        <h6 class="mt-5 pt-5">Oferta acaba em 5 dias.</h6>
        <h6 class="pb-4">
          Não perca a chance de ouvir sua música sem anúncios, no modo offline e 
          muito mais. Cancele quando quiser.
        </h6>
        <a href="#" class="btn btn-primary">GANHE 3 MESES GRÁTIS</a>
        <p>
          Somente para o plano Individual. Depois, apenas R$ 16,90/mês. 
          Oferta indisponível para usuários que já experimentaram o Premium. 
          <a href="#" alt="link">Sujeita a Termos e Condições</a>. 
          A oferta termina em 31 de dez de 2020.
        </p>
      </div>
      <div class="col-md-5 offset-md-1">
        <img class="img-fluid" src="./imagens/disco.png" alt="disco">
      </div>
    </div>
  </div>
	<div class="container">
		<div class="row">
			<div class="col-md-3 py-3 navegacao-lateral"> <!--Navegação Lateral-->
				<?php
					include __DIR__ . "/../layouts/navegacao-lateral.php";
				?>
			</div>
			<div class="col-md-9 visao-geral py-5 px-5 utilitario"> <!--Visão Geral-->
				<h2 class="fw-bolder">Visão geral da conta</h2>
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
					<h2 class="banner-roxo fw-bolder">
						<strong>Spotify Free</strong>
					</h2>
							
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
  include __DIR__ . "/../layouts/rodape.php";
?>