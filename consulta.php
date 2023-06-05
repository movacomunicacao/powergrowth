<?php
include('inc/database.php');

$buscando = array_key_exists('buscando', $_POST) ? $_POST['buscando'] : '';
$pesquisar = array_key_exists('pesquisar', $_POST) ? $_POST['pesquisar'] : '';
$conn	= db();

include('inc/head.php');
?>


<body class="bg-light  cadastro">

    <div class="container-fluid">

      <div class="row justify-content-center py-3 text-center">
        <div class="col-12 col-lg-6 p-5 rounded">
          <img src="img/agrifirm_logo.png" class="col-6 mb-5" alt="">
        </div>
      </div>


      <div class="row justify-content-center consulta">
        <div class="col-10 col-lg-10 py-auto">



        <h2>:: Análises</h2>

        <?PHP $linkRelatorio = ($buscando == '') ? 'consulta.php' : 'relatorio.php'; ?>

        <form method="POST" action="<?= $linkRelatorio ?>">

        <?PHP if ($buscando == '') { ?>

          <label for="" class="me-1">Procurar: </label>
          <input type="text" class="mb-3 p-2" name="pesquisar" id="pesquisar" placeholder=" Digite o nome do produtor...">

        <?PHP } else { ?>

          <select class="mb-3 p-2" name="producer_id" id="">
          <?PHP
          foreach($conn->query(" SELECT * FROM producer WHERE title LIKE '%$pesquisar%'") as $row) {
              $title = $row['title'];
              $id_producer = $row['id'];

              echo (' <option value="'.$id_producer.'">'.$title.'</option>');


          }
          ?>
          </select>
        <?PHP } ?>

        <input type="hidden" name="buscando" value="1" />

        <input type="submit" class="btn btn-primary btn-verde " value="enviar">
        </form>

        </div>
      </div>
    </div>



</body>

</html>
