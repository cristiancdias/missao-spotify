
<?php
      $ano = $_POST['validacao'];
      $soma = 2020 - $ano;
      if ($soma <= 14){
        echo "<script type='text/javascript'>alert('Você não pode alterar o cadastro idade inferior a permitida!');javascript:window.location='perfil.php';</script>";
      } else {
        echo "<body style='background-color: #000;'>";
          echo "<img src='./imagens/loading.jpg' style='margin-left: 400px;'>";
        echo "</body>";
      }
?>
