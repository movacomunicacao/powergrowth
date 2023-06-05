<?php include('inc/head.php'); ?>

<body class="bg-light consulta cadastro">

    <div class="container-fluid" id="relatorio">

      <div class="row justify-content-center py-3 text-center">
        <div class="col-12 col-lg-6 p-5 rounded">
          <img src="img/agrifirm_logo.png" class="col-6 mb-0" alt="">
        </div>
      </div>

      <div class="row justify-content-center">
        <div class="col-10 col-lg-10 py-auto">
          <h2 class="mb-4">:: Relatórios</h2>
        <?php
        include('inc/database.php');


        $conn = db();


        $producer_id = $_POST['producer_id'];


  $quant = 0;
  $quant =  $conn->query(" SELECT id FROM data WHERE id_producer = $producer_id ");
  $quant->execute();
  $quant = $quant->fetchColumn();

  if($quant!=0){

    echo ('<table><tr><td class="texto-verde"><strong>Código</strong></td><td class="texto-verde"><strong>Arquivo</strong></td></tr>');

         foreach($conn->query(" SELECT * FROM data WHERE id_producer = $producer_id ORDER BY date DESC") as $row) {

            $id = $row['id'];
            $date = $row['date'];
            $date = date("d/m/Y", strtotime($date));
            echo ('<tr><td>'.$id.'</td><td><a href="action.php?id_relatorio='.$id.'"><strong><i class="far fa-eye texto-verde"></i>  '.$date.'</strong></a></td></tr>');

          }
        } else {
          echo ('Esse produtor não possui relatórios.');
        }
    echo ('</table>');
        ?>


        </div>
      </div>
  </div>



</body>

</html>
