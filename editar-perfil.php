<?php
  include __DIR__ . "/layouts/cabecalho.php";
?>

<div class="container-fluid fundo ">
  <div class="container">
    <div class="row">
      <div class="col-md-3 py-3 navegacao-lateral"> <!--Navegação Lateral-->  
        <?php
				  include __DIR__ . "/layouts/navegacao-lateral.php";
        ?>
      </div>
      <div class="col-md-9 p-5 utilitario editar-perfil">
        <h1 class="fw-bolder">Editar perfil</h1>
        <form class="py-3" action="loading.php" method="post">
          <div class="mb-3">
            <label for="InputEmail" class="form-label fw-bolder">E-mail</label>
            <input type="email" class="form-control p-3" id="InputEmail" required>
          </div>
          <fieldset disabled>
            <div class="mb-3">
              <label for="disabledTextInput" class="form-label fw-bolder">Senha</label>
              <input type="text" id="disabledTextInput" class="form-control p-3">
            </div>
          </fieldset>
          <div class="mb-3">
            <label for="sexo" class="form-label fw-bolder">Sexo</label>
            <select id="sexo" class="form-select p-3">
              <option>Feminino</option>
              <option selected>Masculino</option>
              <option>Não binário</option>
            </select>
          </div>
          <div class="row g-3">
            <label for="nascimento" class="form-label fw-bolder">Data de nascimento</label>
            <div class="col">
              <input type="text" class="form-control p-3" required>
            </div>
            <div class="col">
              <select id="mes" class="form-select p-3"required>
                <option selected>Janeiro</option>
                <option >Fevereiro</option>
                <option >Março</option>
                <option >Abril</option>
                <option >Maio</option>
                <option >Junho</option>
                <option >Julho</option>
                <option >Agosto</option>
                <option >Setembro</option>
                <option >Outubro</option>
                <option >Novembro</option>
                <option >Dezembro</option>
              </select>
            </div>
            <div class="col">
              <input type="text" class="form-control p-3" name="validacao" required>
            </div>
          </div>
          <div class="mb-3 py-4">
            <label for="Pais" class="form-label fw-bolder">País ou região </label>
            <select id="Pais" class="form-select p-3" required>    
              <option selected disabled>Selecione</option> 
              <option>Brasil</option>              
            </select>
          </div>
          <div class="form-check py-1">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
              Compartilhar meus dados cadastrais com os provedores de conteúdo do Spotify para fins de marketing.
            </label>
          </div>
          <hr>
          <div class="d-flex justify-content-end">
            <a href="index.php" class="px-5 mt-3 text-decoration-none">CANCELAR</a>
            <button class="btn btn-primary rounded-pill py-3 px-5" type="submit"> 
              SALVAR PERFIL
            </button>            
          </div>
        </form>
        
      </div>
    </div>
  </div>
</div>

<?php
  include __DIR__ . "/layouts/rodape.php";
?>