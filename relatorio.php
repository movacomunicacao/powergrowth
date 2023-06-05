<?php include('inc/head.php'); ?>

<body class="bg-light consulta cadastro">

    <div class="container-fluid">

      <div class="row justify-content-center">
        <div class="col-10 col-lg-10 py-auto">
      <h1>Relatórios</h1>
        <?php 
        include('inc/database.php');


        $conn = db();

          
        $producer_id = $_POST['producer_id'];

    
  $quant = 0;
  $quant =  $conn->query(" SELECT id FROM data WHERE id_producer = $producer_id ");
  $quant->execute();
  $quant = $quant->fetchColumn();

  if($quant!=0){
    
    echo ('<table><tr><td>Código</td><td>Arquivo</td></tr>');
         foreach($conn->query(" SELECT * FROM data WHERE id_producer = $producer_id ORDER BY date DESC") as $row) {
              
            $id = $row['id'];
            $date = $row['date'];
            $date = date("d/m/Y", strtotime($date));
            echo ('<tr><td>'.$id.'</td><td><a href="action.php?id_relatorio='.$id.'">'.$date.'</a></td></tr>');
          
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