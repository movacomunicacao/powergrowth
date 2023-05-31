<?php 
include('inc/database.php');
//include('consulta.php');

$buscando = array_key_exists('buscando', $_POST) ? $_POST['buscando'] : '';
$pesquisar = array_key_exists('pesquisar', $_POST) ? $_POST['pesquisar'] : '';
$conn	= db();

var_dump( $buscando, ($buscando != '') );

include('inc/head.php'); 
?>


<body class="bg-light consulta cadastro">

    <div class="container-fluid">

      <div class="row justify-content-center">
        <div class="col-10 col-lg-10 py-auto">

        <H1>Análises</H1>

        <?PHP $linkRelatorio = ($buscando == '') ? 'consulta.php' : 'pesquisa.php'; ?>

        <form method="POST" action="<?= $linkRelatorio ?>">

        <?PHP if ($buscando == '') { ?>

          <label for="" class="me-1">Porcurar: </label>
          <input type="text" name="pesquisar" id="pesquisar" placeholder=" Digite o nome do produtor..." class="me-2" >

        <?PHP } else { ?>

          <select name="producer_id" id="">
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

        <input type="submit" class="btn btn-primary " value="enviar">
        </form>

        </div>
      </div>
    </div>

    
    
</body>

</html>